<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
    <h5>Страница администратора</h5>
    <h1 class="text-3x1 font-medium">{{ isset($changedocument) ? "Данные о ревизии документа":'Создание номера изменений документа'}}</h1>

    <form enctype="multipart/form-data"  method="POST" action="{{ isset($changedocument) ? route('admin.changedocument.update', $changedocument->id): route('admin.changedocument.store') }}"   >
            @csrf
            @if(isset($changedocument))
                @method('PUT')
            @endif


            <ul>
           

                <li>
                <label for="designdocument_id">Децимальный номер документа:</label>
                @if(isset($changedocument))
                <label for="designdocument_id">Децимальный номер документа:{{$changedocument->designdocument->designation}}</label>
                <input type="hidden"  name="designdocument_id" type="text" class="form-control" placeholder="Децимальный номер документа:" value ="{{$changedocument->designdocument->id}}" />	

                @else
                 <!--  <input name="designdocument_id" type="text" class="form-control" placeholder="Децимальный номер"/>-->
                 <select name="designdocument_id">
						@foreach ($designdocuments as $designdocument)
							<option value ="{{$designdocument->id}}" > {{$designdocument->designation}} </option>
						@endforeach	
					</select> 
                    @error('designdocument_id')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>


                @endif

                
             
                <li>
                <label for="notice_id">Номер извещения:</label>
                <!--  <input name="notice_id" type="text" class="form-control" placeholder="Номер извещения"/> 	-->
                    <select name="notice_id">
						@foreach ($notices as $notice)
							<option value ="{{$notice->id}}" > {{$notice->designation}} </option>
						@endforeach	
					</select> 
                    @error('notice_id')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
               
                <li>
                <label for="number" >Номер изменения чертежа</label>
                <input name="number" type ="numder" class="form-control" placeholder="Номер изменения чертежа"/>
                    @error('number')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
               
                <li>
                <label for="documentfile">Новая версия чертежа</label>
                    <input name="documentfile" type="file" placeholder="Файл чертежа" /> <br />
                    @error('documentfile')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>

            <br />
            <button type="submit" class="btn btn-lg btn-primary">Создать документ </button>
        </form>

        <ul class="actions">
			<li><a href="{{route('admin.changedocument.index')}}" class="button">Назад</a></li>
		</ul>
    </div>
</div> 
