<section>
					<header class="major">
                    <h2>Страница администратора - Заказчики</h2>
                
                    <a href="{{route('admin.customers.create')}}" class="text-indigo-600 hover:text-indigo-900">Добавить нового заказчика</a>
				
					</header>

                    <table>
                        <caption>Перечень организаций-заказчиков </caption>
                            <tr><th> Наименование </th><th> Адрес </th> <th>Email</th><th>Телефон</th>
                                @foreach($customers as $customer)
                                    <tr> <th>{!! $customer->title !!}</th> <th>  <a href="#">{{$customer->address}}</a> </th> <th>{!! $customer->email !!}</th><th>{!! $customer->phone !!}</th>
                                    <td>
                                        <form action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST">
                                        <a href="{{route( 'admin.customers.edit', $customer->id)}}" class="button">Изменить</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" >Удалить</button>
                                        </form>
                                    </td>
                                    @endforeach
			        </table>
                    <div > {{$customers->links()}}  </div> 
					<ul class="actions">
						<li><a href="{{route('admin.management')}}" class="button"> Назад</a></li>
					</ul>
</section>