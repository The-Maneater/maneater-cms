@extends('layouts.admin')

@section('title')
    Article Listing
@endsection

@section('content')
    <div class="content">
        <div class="theader">
            <h2 class="">Articles</h2>
            <div class="is-flex is-flex-row">
                <form method="GET" class="search-form">
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" name="search" type="text" placeholder="Find an article" value="{{ request('search') }}">
                        </p>
                        <p class="control">
                            <button class="button is-info" type="submit">
                                Search
                            </button>
                        </p>
                    </div>
                </form>
                <a href="{{ route('create-story') }}" class="button">Add Article</a>
            </div>
        </div>

       <table class="table is-bordered is-striped">
           <thead>
           <tr>
               <th>Title</th>
               <th>Runsheet Slug</th>
               <th>Date Published</th>
               <th>Issue</th>
               <th>Priority</th>
               <th>Section</th>
           </tr>
           </thead>
           <tbody>
           @foreach($articles as $article)
              <tr>
                <td><a href="{{ route('edit-story', [$article->section->slug, $article->slug]) }}">{{ $article->title }}</a></td>
                <td>{{ $article->runsheet_slug }}</td>
                <td>{{ $article->formattedPublishDate->format('M j, Y g:i A') }}</td>
                <td>{{ $article->issue->issueName }}</td>
                <td>{{ $article->priority }}</td>
                <td>{{ $article->section->name }}</td>
              </tr>
           @endforeach
           </tbody>
       </table>
        <div class="pagination-links">
            {{ $articles->links() }}
        </div>

   </div>
@endsection