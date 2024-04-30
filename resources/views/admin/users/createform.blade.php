<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
        <h1 class="text-3x1 font-medium">{{ isset($userDetail->user) ? "Редактировать данные пользователя - Login: {$userDetail->user->name}":'Создать учетную запись пользователя'}}</h1>

        <form enctype="multipart/form-data"  method="POST" action="{{ isset($userDetail->user) ? route('admin.users.update', $userDetail): route('admin.users.store') }}"   class="col-3 offset-4">
            @csrf

            @if(isset($userDetail->user))
                @method ('PUT')
            @endif
            <ul>
                <li>
                <label for="name">Логин:</label>
                    <input  name="name" type="text" class="form-control" placeholder="Логин" value ="{{$userDetail->user->name??''}}" />
                    @error('name')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="email">Email:</label>
                    <input  name="email" type="email" class="form-control" placeholder="Email" value ="{{$userDetail->user->email??''}}" />
                    @error('email')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
       
                <li>
                <label for="password">Пароль:</label>
                    <input  name="password" type="password" class="form-control" placeholder="Пароль" value ="{{$userDetail->user->password??''}}" />
                    @error('password')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <input name="password_confirmation" type="password" class="w-full h-12 border border-grey-800 rounded px-3 @error('password_confirmation') border-red-500 @enderror" 
                    placeholder="Подтверждение пароля" value ="{{$userDetail->user->password??''}}" />
                    @error('password_confirmation')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
       
                <br>
                </li>
                <p>Данные пользователя:</p>
                <li>
                <label for="organization_id">Место работы:</label>
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
                
                <input name="firstname"  type="text" placeholder="Имя" value ="{{$userDetail->firstname??''}}"/>
                    @error('firstname')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror

                <input name="fathername"  type="text" placeholder="Отчество" value ="{{$userDetail->fathername??''}}" />
                    @error('fathername')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror

                <input name="lastname"  type="text" placeholder="Фамилия"  value ="{{$userDetail->lastname??''}}" />
                    @error('lastname')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror

                <input name="jobtitle"  type="text" placeholder="Должность"  value ="{{$userDetail->jobtitle??''}}" />
                    @error('jobtitle')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror    
                <input name="workphone"  type="text" placeholder="Рабочий телефон"  value ="{{$userDetail->workphone??''}}" />
                    @error('workphone')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror 
                <input name="personalphone"  type="text" placeholder="Сот.телефон"  value ="{{$userDetail->personalphone??''}}" />
                    @error('personalphone')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror    

               
            </ul>
            <br />
            <button type="submit" class="btn btn-lg btn-primary">Сохранить </button>
        </form>

        <ul class="actions">
			<li><a href="{{route('admin.users.index')}}" class="button">Назад</a></li>
		</ul>
    </div>
</div> 
</section>