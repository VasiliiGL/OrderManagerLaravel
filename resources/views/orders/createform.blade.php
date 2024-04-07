<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
        <h1 class="text-3x1 font-medium">Оформление заказа</h1>

        <form enctype="multipart/form-data"  method="POST" action="{{ route('customer.createOrderForm_process') }}"   class="col-3 offset-4">
            @csrf
            <ul>
                <li>
                <label for="customer">Заказчик:</label>
                    <input readonly="readonly"  name="customer" type="text" class="form-control" placeholder="Заказчик" value ="<?php echo $customer->title; ?>" />
                    @error('customer')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="organization">Изготовитель:</label>
                    <p> 
                        <select name="organization">
                            @foreach ($organizations as $organization)
                            <option value ="<?php echo $organization; ?>" > {{$organization}}</option>
                            @endforeach
                        </select> 
                    </p>
                    @error('organization')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="number">Номер письмо-заявки</label>
                <input name="number" type="text" class="form-control" placeholder="Номер письма для заказа"/>
                    @error('number')
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
                <label for="thumbnail">Файл письма</label>
                    <input name="thumbnail" type="file" class="w-full h-12" placeholder="Письмо" /> <br />
                    @error('thumbnail')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
            </ul>
            <br />
            <button type="submit" class="btn btn-lg btn-primary">Отправить заказ </button>
        </form>
    </div>
</div> 
</section>