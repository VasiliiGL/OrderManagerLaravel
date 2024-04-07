<form method="post" action="{{ url('/store') }}">
    <p><textarea name="editor" id="editor" ></textarea></p>
 
    @csrf
    <input type="submit" name="submit" value="submit"/>

</form>

<script src={{asset('ckeditor/ckeditor.js')}}></script>
<script>
     ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>