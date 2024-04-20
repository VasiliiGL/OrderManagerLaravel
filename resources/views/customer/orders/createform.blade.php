<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
        <h1 class="text-3x1 font-medium">Оформление заказа</h1>

        <form enctype="multipart/form-data"  method="POST" action="{{ route('customer.createOrderFormProcess') }}"   class="col-3 offset-4">
            @csrf
            <ul>
                <li>
                <label for="customer_id">Заказчик: {{$customer->title}}</label>
                    <input  type="hidden"  name="customer" type="text" class="form-control" placeholder="Заказчик" value ="{{$customer->id}}" /> 
                    @error('customer_id')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="organization_id">Изготовитель:</label>
                    <p> 
                        <select name="organization_id">
                            @foreach ($organizations as $organization)
                            <option value ="{{$organization->id}}"> {{$organization->title}}</option>
                            @endforeach
                        </select> 
                    </p>
                    @error('organization_id')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="number">Номер письмо-заявки</label>
                <input name="number" type="varchar(255)" class="form-control" placeholder="Номер письма для заказа"/>
                    @error('number')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="data">Дата создания письма-заявки</label>
                <input name="data" type="date" class="form-control" placeholder="Дата создания письма"/>
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
                    <input name="desiredDate" type="varchar(255)" class="form-control" placeholder="Срок изготовления"/>
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
            <button type="submit" class="btn btn-lg btn-primary">Отправить заказ </button>
        </form>
        
							<ul class="actions">
								<li><a href="{{route('customer.orders.showAll',$customer->id)}}" class="button">Назад</a></li>
							</ul>
    </div>
</div> 
</section>