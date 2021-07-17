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
            <form>
              <div class="card-body">

                <div class="row">

                </div>
                <div class="col-lg-6">

                  <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Title">
                  </div>

                  <div class="form-group">
                    <label for="subtitle">Post Sub-Title</label>
                    <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Sub-Title">
                  </div>

                  <div class="form-group">
                    <label for="slug">Post Slug</label>
                    <input type="text" class="form-control" name="slug" id="subtitle" placeholder="Slug">
                  </div>

                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="image">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" style="padding-right: 150px;"  for="image"></label>
                      </div><br>

                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>  
                </div>
                <div class="row">
                  <div class="form-check">
                     <div class="col-lg">
                         <input type="checkbox" class="form-check-input" id="exampleCheck1"><br>
                         <label class="form-check-label" for="exampleCheck1" name="status">Publish</label>
                     </div> 
                </div>
                
                </div>
  
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->


          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Summernote
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <textarea id="summernote">
                Place <em>some</em> <u>text</u> <strong>here</strong>
              </textarea>
            </div>
            
          </div>
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