<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
    <h5>Страница администратора</h5>
    <h1 class="text-3x1 font-medium">{{ isset($designdocument) ? "Редактировать реквизиты документа : $designdocument->designation":'Создание реквизитов документа'}}</h1>

    <form enctype="multipart/form-data"  method="POST" action="{{ isset($designdocument) ? route('admin.designdocument.update', $designdocument->id): route('admin.designdocument.store') }}"  >
            @csrf
            @if(isset($designdocument))
                @method('PUT')
            @endif
            <ul>
                <li>
                <label for="designation">Децимальный номер документа:</label>
                <input name="designation" type="text" class="form-control" placeholder="Децимальный номер" value ="{{$designdocument->designation??''}}" />
                    @error('designation')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
               
                <li>
                <label for="name" >Наименование</label>
                <input name="name" type ="text" class="form-control" placeholder="Наименование" value ="{{$designdocument->name??''}}" />
                    @error('name')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
               
                <li>
                <label for="type">Тип документа</label>
                <!--<input name="type" type ="text" class="form-control" placeholder="Тип документа"/>-->
              
					<select name="type">
						@foreach ($types as $type)
							<option value ="{{$type}}" > {{$type}} </option>
						@endforeach	
					</select> 	
                    @error('type')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>

            </ul>
            <br />
            <button type="submit" class="btn btn-lg btn-primary">Создать документ </button>
        </form>

        <ul class="actions">
			<li><a href="{{route('admin.designdocument.index')}}" class="button">Назад</a></li>
		</ul>
    </div>
</div> 
</section>