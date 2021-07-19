
@extends('admin.layouts.app')

@section('main-content')

	<!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1>Text Editors</h1>
	          </div>
	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="#">Home</a></li>
	              <li class="breadcrumb-item active">Text Editors</li>
	            </ol>
	          </div>
	        </div>
	      </div><!-- /.container-fluid -->
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-12">

	          <!-- general form elements -->
	          <div class="card card-primary">
	            <div class="card-header">
	              <h3 class="card-title">Titles</h3>
	            </div>
	            <!-- /.card-header -->
	            <!-- form start -->

	            @include('includes.massages')
	           

	            <form role="form" action="{{route('category.store')}}" method="post">
	            	{{csrf_field()}}
	              <div class="card-body">

	                <div class="row">

	                </div>
	                <div class="col-lg-offset-3 col-lg-6">

	                  <div class="form-group">
	                    <label for="name">Category</label>
	                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Category Title">
	                  </div>

	                  <div class="form-group">
	                    <label for="slug">Category Slug</label>
	                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug">
	                  </div>

	                  <div class="form-group">
	                    <button type="submit" class="btn btn-primary">Submit</button>
	                    <a href="{{route('category.index')}}" class="btn btn-warning">Back</a>
	                  </div>
	                </div>
	  
	              </div>
	              <!-- /.card-body -->

	              
	            </form>
	          </div>
	          <!-- /.card -->

	        </div>
	        <!-- /.col-->
	      </div>
	      <!-- ./row -->


	      <!-- toolbar with suitable buttons and dialogues -->
	      <!-- <div id="toolbar">
	        <a data-wysihtml5-command="bold">bold</a>
	        <a data-wysihtml5-command="italic">italic</a>
	        <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1">H1</a>
	        <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="p">P</a>
	      </div> -->

	      <!-- element to edit -->
	 <!--      <div id="editor" data-placeholder="Go on, start editing..."></div>

	      <script>
	        var editor = new wysihtml5.Editor('editor', {
	          toolbar: 'toolbar',
	          parserRules:  wysihtml5ParserRules
	        });
	      </script>




	 -->
	 <script>
	  $(document).ready(function() {
	    $('#summernote').summernote();
	  });
	 </script>

@endsection