@extends('main')

@section('title', '| Contact')
@section('content')
      <div class="row">
        <div class="col-xs-12">
            <h1 class="home_title">Contact Me</h1>
            <hr>
            <form>
             <div class="form-group">
               <label name="email">Email</label>  
               <input id="email" name="email" class="form-control">
                 
                 <div class="form-group">
               <label name="subject">Subjectt</label>  
               <input id="subject" name="subject" class="form-control">
                      <div class="form-group">
               <label name="message">Message</label>  
                          <textarea id="essage" name="email" class="form-control">Type yourmessage here..</textarea>
                      
             </div>
        <input type="submit" value="Send Message" class="btn btn-success"/>
            </form>
          </div>  
        </div>
      </div> 
    </div>
@endsection

