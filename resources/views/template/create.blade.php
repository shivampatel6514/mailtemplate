<x-app-layout>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="post" action="{{ route('templates.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" class="text-dark form-control"/>
                  </div>  
                  <div class="form-group">
                      <label><strong>Content :</strong></label>
                      <textarea class="ckeditor form-control" name="content"></textarea>
                  </div>
                  <div class="form-group text-center">
                      <button type="submit" class="btn btn-success btn-sm">Save</button>
                  </div>
              </form>
              </div>
          </div>
      </div>
  </div>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
</x-app-layout>