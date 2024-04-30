<section>
					<header class="major">
                    <h2>Страница администратора - Пользователи</h2>
                
                    <a href="{{route('admin.users.create')}}" class="text-indigo-600 hover:text-indigo-900">Добавить учетную запись пользователя</a>
				
					</header>

                    <table>
                        <caption>Перечень пользователей </caption>
                            <tr><th> Логин </th><th> Email </th> <th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Должность</th><th>Место работы</th>
                                @foreach($usersDetail as $userDetail)
                                    <tr> <th>{!! $userDetail->User->name !!}</th> <th>  {!! $userDetail->User->email !!} </th> <th>{!! $userDetail->lastname!!}</th>  <th>{!! $userDetail->firstname!!}</th><th>{!! $userDetail->fathername!!}</th><th>{!! $userDetail->jobtitle!!}</th><th>{!! $userDetail->Organization->title !!}</th>
                                    <td>
                                    <a href="{{route('admin.users.edit', $userDetail->id)}}" class="button">Изменить</a>
                                        <form action="{{route('admin.users.destroy', $userDetail->id)}}" method="POST">                                                                           
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" >Удалить</button>
                                        </form>
                                    </td>
                                    @endforeach
			        </table>
               
                    <nav class="button">{{$usersDetail->links()}}</nav >
					<ul class="actions">
                   
                        <li><a href="{{route('admin.management')}}" class="button"> Назад</a></li>
					</ul>
</section>