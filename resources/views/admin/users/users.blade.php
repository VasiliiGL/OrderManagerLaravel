<section>
					<header class="major">
                    <h2>Страница администратора - Пользователи</h2>
                
                    <a href="{{route('admin.orders.create')}}" class="text-indigo-600 hover:text-indigo-900">Добавить новый заказ</a>
				
					</header>

                    <table>
                        <caption>Перечень пользователей </caption>
                            <tr><th> Логин </th><th> Email </th> <th>Фамилия</th><th>Должность</th><th>Место работы</th>
                                @foreach($users as $user)
                                    <tr> <th>{!! $user->name !!}</th> <th>  <a href="#">{{$user->email}}</a> </th> <th>{!! $user->name !!}</th><th>{!!  $user->name!!}</th><th>{!! $user->name !!}</th>
                                    <td>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                        <a href="{{route( 'admin.users.edit', $user->id)}}" class="button">Изменить</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" >Удалить</button>
                                        </form>
                                    </td>
                                    @endforeach
			        </table>
					<ul class="actions">
                        <li><a href="{{route('admin.management')}}" class="button"> Назад</a></li>
					</ul>
</section>