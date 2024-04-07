<section>
					<header class="major">
                    <h2>Страница администратора - Организаций-изготовители</h2>
                
                    <a href="{{route('admin.organizations.create')}}" class="text-indigo-600 hover:text-indigo-900">Добавить организацию</a>
				
					</header>

                    <table>
                        <caption>Перечень организаций-изготовителей </caption>
                            <tr><th> Наименование </th><th> Адрес </th> <th>Email</th><th>Телефон</th>
                                @foreach($organizations as $organization)
                                    <tr> <th>{!! $organization->title !!}</th> <th>  <a href="#">{{$organization->address}}</a> </th> <th>{!! $organization->email !!}</th><th>{!! $organization->phone !!}</th>
                                    <td>
                                        <form action="{{ route('admin.organizations.destroy', $organization->id) }}" method="POST">
                                        <a href="{{route( 'admin.organizations.edit', $organization->id)}}" class="button">Изменить</a>
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