@extends('layouts.admin')

@section('title')
    Section Webfront
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>{{ $sectionTitle }} Web Front</h2>
        </div>
        <form action="" method="POST" id="webfrontForm">
            {{ csrf_field() }}
            <table class="table">
                <thead>
                <tr>
                    <th>Position</th>
                    <th>Article</th>
                    <th>New Article</th>
                </tr>
                </thead>
                <tbody>
                @for($i = 1; $i<=$spots; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                  @if($articles->get($i) !== null)
                        <td>{{ $articles->get($i)->title }}</td>
                        <td>
                            <select2 name="articles[{{ $i }}]">
                                <option></option>
                                @foreach ($sectionArticles as $sArticle)
                                    <option value="{{ $sArticle->id }}" {{ ( $articles->get($i)->id == $sArticle->id ? "selected" : "") }}>{{ $sArticle->title }}</option>
                                @endforeach
                            </select2>
                        </td>
                  @else
                        <td> None </td>
                        <td>
                            <select2 name="articles[{{ $i }}]">
                                <option></option>
                                @foreach ($sectionArticles as $sArticle)
                                    <option value="{{ $sArticle->id }}">{{ $sArticle->title }}</option>
                                @endforeach
                            </select2>
                        </td>
                  @endif
                    </tr>
                @endfor
                </tbody>
            </table>
        </form>
    </div>
@endsection

@include("admin.shared.form-footer")

@section('scripts')
    <script>
        function submitForm(){
            $("#webfrontForm").submit();
        }

        $(document).ready(function(){
            $('select').select2({
                placeholder: 'Select an option',
                allowClear: true
            });
            //$("select").val("").trigger('change')
        });
    </script>
@endsection