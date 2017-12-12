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
               @ability('ed-board,super', '')
               <th></th>
               @endrole
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
                  @ability('ed-board,super', '')
                <td><button class="button is-danger" onclick="showDeleteModal({{ $article->id }})">Delete</button></td>
                  @endrole
              </tr>
           @endforeach
           </tbody>
       </table>
        <div class="pagination-links">
            {{ $articles->links() }}
        </div>

        <div class="modal" id="delete-modal">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="box">
                    <p>Are you sure you wish to delete this story?</p>
                    <button class="confirm-delete button is-danger">Yes</button>
                    <button class="button is-info" onclick="closeModal()">Cancel</button>
                </div>
            </div>
            <button class="modal-close is-large" aria-label="close"></button>
        </div>
   </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.modal-close').attr('onClick', 'closeModal()')
        });

        function closeModal(){
            $('#delete-modal').removeClass('is-active');
        }//$($0).parent().parent().children("td:first")[0].innerText;

        function showDeleteModal(id){
            $('#delete-modal').addClass("is-active");
            $('.confirm-delete').attr('onClick', "deleteStory(" + id + ")");
        }

        function deleteStory(id){
            console.log(id);
            $.post('/admin/core/stories/' + id, {_method: "delete", _token: window.Laravel.csrfToken}, function(data){
                closeModal();
                location.reload();
            });

        }
    </script>
@endsection