<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
    <h5>Страница администратора</h5>
    <h1 class="text-3x1 font-medium">{{ isset($changedocument) ? "Данные о ревизии документа ID ($changedocument->id)":'Создание номера изменений документа'}}</h1>

    <form enctype="multipart/form-data"  method="POST" action="{{ isset($changedocument) ? route('admin.changedocument.update', $changedocument->id): route('admin.changedocument.store') }}"   class="col-3 offset-4">
            @csrf
            <ul>
                <li>
                <label for="designdocument_id">Децимальный номер документа:</label>
                <input name="designdocument_id" type="text" class="form-control" placeholder="Децимальный номер"/>
                    @error('designdocument_id')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="notice_id">Номер извещения:</label>
                <input name="notice_id" type="text" class="form-control" placeholder="Номер извещения"/>
                    @error('notice_id')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
               
                <li>
                <label for="number" >Номер изменения чертежа</label>
                <input name="number" type ="text" class="form-control" placeholder="Номер изменения чертежа"/>
                    @error('number')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
               
                <li>
                <label for="documentfile">Новая версия чертежа</label>
                    <input name="documentfile" type="file" class="w-full h-12" placeholder="Файл чертежа" /> <br />
                    @error('documentfile')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
            </li>
                
               
                
            </ul>
            <br />
            <button type="submit" class="btn btn-lg btn-primary">Создать документ </button>
        </form>

        <ul class="actions">
			<li><a href="{{route('admin.changedocument.index')}}" class="button">Назад</a></li>
		</ul>
    </div>
</div> 
