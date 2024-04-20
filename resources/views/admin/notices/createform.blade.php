
<section>
<link rel="stylesheet" href="assets/css/main.css" />
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
        <h1 class="text-3x1 font-medium">Новое извещение</h1>

        <form enctype="multipart/form-data"  method="POST" action="{{ route('admin.notice.store') }}"   class="col-3 offset-4">
            @csrf
            <ul>
            <input name="designation" type="text" class="w-full h-12 border border-grey-800 rounded px-3 @error('name') border-red-500 @enderror"  placeholder="Номер извещения" />

                @error('designation')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <input name="data"  type="date" placeholder="Дата создания" />
                @error('data')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <input name="description"  type="text" placeholder="Содержание извещения (описание изменений)" />
                @error('description')
                    <p class="text-red-500">{{$message}}</p>
                @enderror    
            <li>
                <label for="documentfile">Файл извещения</label>
                    <input name="documentfile" type="file" class="w-full h-12" placeholder="Файл извещения" /> <br />
                    @error('documentfile')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
            </li>
              
                            
            </ul>
            <br />
            <button type="submit" class="btn btn-lg btn-primary">Сохранить </button>
        </form>
        <ul class="actions">
			<li><a href="{{route('admin.notice.index')}}" class="button">Назад</a></li>
		</ul>
    </div>
</div> 
