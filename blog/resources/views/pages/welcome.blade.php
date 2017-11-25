
@extends('main')

@section('title', '| HomePage')
   @section('content')
      <div class="row">
        <div class="col-xs-12">
          <div class="jumbotron">
            <h1 class="home_title">Welcome to my blog</h1>
            <p>Thank you for visiting. This is my test websote built with Laravel. Please read my popular post. </p>
              <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
          </div>  
        </div>
      </div>
        
    <div class="row">
      <div class="col-md-8">
          <div class="post">
              <h3>Post Title</h3> 
              <p>Blah blah blah blah......</p>
              <a href="#" class="btn btn-primary">Read    more</a>
          </div>   <hr>           
         
              <div class="post">
              <h3>Post Title</h3> 
              <p>Ta ra reee raaaa......</p>
              <a href="#" class="btn btn-primary">Read    more</a>
          </div> <hr>
          
                 <div class="post">
              <h3>Post Title</h3> 
              <p>Sa ree ga maa......</p>
              <a href="#" class="btn btn-primary">Read    more</a>
          </div> 
      </div>  
        
      <div class="col-md-4">
        This is my sidebar of 4 divisions
      </div> 
    </div>
    </div> 
@endsection




  