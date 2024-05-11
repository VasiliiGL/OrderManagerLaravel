<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
    <h1 class="text-3x1 font-medium">{{ isset($post) ? "Редактировать заказ ID ($order->id)":'Создание заказа'}}</h1>

    <form enctype="multipart/form-data"  method="POST" action="{{ isset($post) ? route('admin.orders.update', $order->id): route('admin.orders.store') }}"   class="col-3 offset-4">
            @csrf
            <ul>
                <li>
                <label for="customer_id">Заказчик:</label>
                    <p> 
                        <select name="customer_id">
                            @foreach ($customers as $customer)
                            <option value = "{{$customer->id}}" > {{$customer->title}}</option>
                            @endforeach
                        </select> 
                    </p>  
                    @error('customer_id')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="organization_id">Изготовитель:</label>
                    <p> 
                        <select name="organization_id">
                            @foreach ($organizations as $organization)
                            <option value ="{{$organization->id}}" > {{$organization->title}}</option>
                            @endforeach
                        </select> 
                    </p>
                    @error('organization_id')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="number">Номер письмо-заявки </label>
                <input name="number" type="text" class="form-control" placeholder="Номер письма для заказа"/>
                    @error('number')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="data" >Дата подписания письма-заявки / Формат YYYY-MM-DD</label>
                <input name="data" type ="date" value="2017-06-01" class="form-control" placeholder="Дата подписания письма-заявки"/>
                    @error('data')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="description">Описание работ</label>
                    <input name="description" type="text" class="form-control" placeholder="Описание заказа"/>
                    @error('description')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="desiredDate">Срок изготовления</label>
                    <input name="desiredDate" type="text" class="form-control" placeholder="Срок изготовления"/>
                    @error('desiredDate')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="letter">Файл письма</label>
                    <input name="letter" type="file" class="w-full h-12" placeholder="Письмо" /> <br />
                    @error('letter')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
            </ul>
            <br />
            <button type="submit" class="btn btn-lg btn-primary">Создать заказ </button>
        </form>
        <ul class="actions">
			<li><a href="{{route('admin.orders.index')}}" class="button">Назад</a></li>
		</ul>
    </div>
</div> 