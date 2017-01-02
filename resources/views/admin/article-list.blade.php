@extends('layouts.admin')

@section('title')
    Article Listing
@endsection

@section('content')
    <div>
       <h2>Articles</h2>
       <table class="table table-striped table-bordered">
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
                <td>{{ $article->publish_date }}</td>
                <td>{{ $article->issue->issueName }}</td>
                <td>{{ $article->priority }}</td>
                <td>{{ $article->section->name }}</td>
              </tr>
           @endforeach
           </tbody>
       </table>
   </div>
@endsection