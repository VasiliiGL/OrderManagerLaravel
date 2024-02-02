<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
        <h1 class="text-3x1 font-medium">Регистрация</h1>
        <form action="{{route('register_process')}}"  class="space-y-5 mt-5" method="POST">
            @csrf
            <input name="name" type="text" class="w-full h-12 border border-grey-800 rounded px-3 @error('name') border-red-500 @enderror"  placeholder="Логин" />

                @error('name')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <input name="firstname"  type="text" placeholder="Имя" />
                @error('firstname')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <input name="fathername"  type="text" placeholder="Отчество" />
                @error('fathername')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <input name="lastname"  type="text" placeholder="Фамилия" />
                @error('lastname')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <input name="jorganization"  type="text" placeholder="Организация" />
                @error('organization')
                    <p class="text-red-500">{{$message}}</p>
                @enderror    

            <input name="jobtitle"  type="text" placeholder="Должность" />
                @error('jobtitle')
                    <p class="text-red-500">{{$message}}</p>
                @enderror    
            <input name="workphone"  type="text" placeholder="Рабочий телефон" />
                @error('workphone')
                    <p class="text-red-500">{{$message}}</p>
                @enderror 
            <input name="personalphone"  type="text" placeholder="Сот.телефон" />
                @error('personalphone')
                    <p class="text-red-500">{{$message}}</p>
                @enderror    
   



            <input name="email" type="text" class="w-full h-12 border border-grey-800 rounded px-3 @error('email') border-red-500 @enderror" placeholder="Email" />
         
                @error('email')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <input name="password" type="password" class="w-full h-12 border border-grey-800 rounded px-3 @error('password') border-red-500 @enderror" placeholder="Пароль"/>

                @error('password')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <input name="password_confirmation" type="password" class="w-full h-12 border border-grey-800 rounded px-3 @error('password_confirmation') border-red-500 @enderror" 
            placeholder="Подтверждение пароля"/>
                @error('password_confirmation')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
       
                <br>
            <div>
                <a href="{{route('login') }}" class="font-medium text-blue-900 hover:dg-blue-300 rounted-md p-2"> 
                    Есть аккаунт?</a> 
            </div>
            <br>
            <button type="submit" class="btn btn-lg btn-primary">Зарегистрировать</button>
        </form>

    </div>
</div>
</section>

<!-- подробности о работниках предприятия
    public function up(): void
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('organization_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('firstname');
            $table->string('fathername');
            $table->string('lastname');
            $table->string('jobtitle'); // должность
            $table->string('workphone'); // телефон
            $table->string('personalphone'); // сотовый телефон
            $table->timestamps();
        });
    }-->