@extends('layouts.admin')

@section('title')
    Edit Staffer
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Edit Staffer</h2>
        </div>
        @include("admin.shared.errors")
        <form action="{{ route('update-staffer', [$staffer->id]) }}" method="POST" id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box">
                <b-field label="First Name:">
                    <b-input name="first_name" value="{{ $staffer->first_name }}"></b-input>
                </b-field>
                <b-field label="Last Name:">
                    <b-input name="last_name" value="{{ $staffer->last_name }}"></b-input>
                </b-field>
                <b-field>
                    <b-checkbox :true-value="1" :false-value="0" name="active" {{ $staffer->is_active ? "checked" : "" }}>Is Active</b-checkbox>
                </b-field>
                <b-field label="Associated user account:">
                    <select2 name="user">
                        <option></option>
                        @foreach(\App\User::all() as $user)
                            <option value="{{ $user->id }}" {{ $staffer->user !== null && $staffer->user->id == $user->id ? "selected" : "" }}>{{ $user->username }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <div class="field">
                    <label class="label">Staff Positions:</label>
                    <table>
                        <thead>
                        <tr>
                            <th>Position</th>
                            <th>Period</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($staffer->positions) > 0)
                            @foreach($staffer->positions as $stafferPosition)
                                @if($loop->first)
                                    <tr class="firstRow" id="firstRow">
                                @else
                                    <tr class="firstRow">
                                        @endif
                                        <td class="photoSelect">
                                            <select name="positions[{{$loop->index}}][position]" class="inline-photo">
                                                <option></option>
                                                @foreach (\App\Position::all() as $position)
                                                    <option value="{{ $position->id }}" {{ $stafferPosition->id == $position->id ? "selected" : "" }}>{{ $position->title }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="reference">
                                            <input type="text" class="input" name="positions[{{$loop->index}}][period]" value="{{ $stafferPosition->pivot->period }}">
                                        </td>
                                        <td class="current">
                                            <b-field>
                                                <b-checkbox :true-value="1" :false-value="0" name="positions[{{$loop->index}}][current]" {{ $stafferPosition->pivot->current ? "checked" : "" }} >Current</b-checkbox>
                                            </b-field>
                                        </td>
                                        <td><a class="button is-link" onclick="removeTableRow(this)"><b-icon icon="close"></b-icon></a></td>
                                    </tr>
                                    @endforeach
                                    @else
                                        <tr class="firstRow" id="firstRow">
                                            <td class="photoSelect">
                                                <select name="positions[0][position]" class="inline-photo">
                                                    <option></option>
                                                    @foreach (\App\Position::all() as $position)
                                                        <option value="{{ $position->id }}" >{{ $position->title }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td class="reference">
                                                <input type="text" class="input" name="positions[0][period]" value="">
                                            </td>
                                            <td class="current">
                                                <b-field>
                                                    <b-checkbox name="positions[0][current]" >Current</b-checkbox>
                                                </b-field>
                                            </td>
                                            <td><a class="button is-link" onclick="removeTableRow(this)"><b-icon icon="close"></b-icon></a></td>
                                        </tr>
                                    @endif
                        </tbody>
                    </table>
                    <a onclick="addTableRow()" class="button">Add Row</a>
                </div>
            </div>
        </form>
    </div>
@endsection

@include("admin.shared.form-footer")

@section('scripts')
    <script>
        function submitForm(){
            $("#storyForm").submit();
        }

        let inlineIndex = {{ count($staffer->positions) }} + 1;

        function addTableRow(){
            $(".inline-photo").select2("destroy");
            let el = $("#firstRow").clone();
            $(el).find('td.photoSelect select').attr("name", "positions[" + inlineIndex + "][position]").val([]);
            $(el).find('td.reference input').attr("name", "positions[" + inlineIndex + "][period]").val("");
            $(el).find('td.current input').attr("name", "positions[" + inlineIndex + "][current]").val("");
            $(el).attr('id', '');
            $("tbody").append(el);
            $('.inline-photo').select2({
                placeholder: 'Select an option',
                allowClear: true
            });
            inlineIndex++;
        }

        function removeTableRow(event){
            $(event).parent().parent().remove();
        }

        $(document).ready(function(){
            $('select').select2({
                placeholder: 'Select an option',
                allowClear: true
            });
        })
    </script>
@endsection