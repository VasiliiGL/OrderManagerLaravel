<section>
					<header class="major">
                    <h2>Страница администратора - Заказы</h2>
                
                    <a href="{{route('admin.orders.create')}}" class="text-indigo-600 hover:text-indigo-900">Добавить новый заказ</a>
				
					</header>

                    <table>
                        <caption>Перечень заказов </caption>
                            <tr><th> Заказчик </th><th> Номер заказа </th> <th>Описание</th><th>Изготовитель</th>
                                @foreach($orders as $order)
                                    <tr> <th>{!! $order->Customer->title !!}</th> <th>  <a href="{{route ('orders.show',$order->id )}}">{{$order->number}}</a> </th> <th>{!! $order->description !!}</th><th>{!! $order->Organization->title !!}</th>
                                    <td>
                                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST">
                                        <a href="{{route( 'admin.orders.edit', $order->id)}}" class="button">Изменить</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" >Удалить</button>
                                        </form>
                                    </td>
                                    @endforeach
			        </table>
                    <div class="button"> {{$orders->links()}}  </div> 
					<ul class="actions">
                        <li><a href="{{route('admin.management')}}" class="button"> Назад</a></li>
					</ul>
</section>