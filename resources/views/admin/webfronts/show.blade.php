@extends('layouts.admin')

@section('title')
    Section Webfront
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Articles</h2>
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
                @for($i = 1; $i<=5; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                  @if($articles->get($i) !== null)
                        <td>{{ $articles->get($i)->title }}</td>
                  @else
                        <td> None </td>
                  @endif
                        <td>
                            <select name="articles[{{ $i }}]">
                                @foreach ($sectionArticles as $sArticle)
                                    <option value="{{ $sArticle->id }}">{{ $sArticle->title }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </form>
    </div>
    <div class="sticky-footer">
        <button class="btn btn-info" onclick="submitForm()">Save</button>
    </div>
@endsection

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
            $("select").val("").trigger('change')
        });
    </script>
@endsection