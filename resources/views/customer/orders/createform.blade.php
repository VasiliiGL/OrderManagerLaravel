<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
        <h1 class="text-3x1 font-medium">Оформление заказа</h1>
        <form enctype="multipart/form-data"  method="POST" action="#"   class="col-3 offset-4">
            @csrf
            <input readonly="readonly"  name="customer" type="text" class="form-control" placeholder="Заказчик" value = {{$customer}} />
            <input name="number" type="text" class="form-control" placeholder="Номер письма для заказа"/>
            
                @error('name')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
           
            <input name="description" type="text" class="form-control" placeholder="Описание заказа"/>
            
                @error('name')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <input name="thumbnail" type="file" class="w-full h-12" placeholder="Письмо" /> <br />
                                    
                @error('thumbnail')
                    <p class="text-red-500">{{$message}}</p> 
                @enderror
            <br />
            <button type="submit" class="btn btn-lg btn-primary">Отправить заказ </button>
        </form>
    </div>
</div> 
</section>