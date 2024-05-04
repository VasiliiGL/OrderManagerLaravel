<section>
					<header class="major">
                    <h2>Страница администратора - Учет извещений</h2>
                    <a href="{{route('admin.notice.create')}}" >Добавить новое извещение</a>
                
                   
				
					</header>

                    <table>
                    <caption>Перечень извещений</caption>
					<tr><th> Номер извещения </th><th> Дата </th> <th> Описнаие </th> <th> Фаил-извещения </th> 
					@foreach($notices as $notice)
                    <tr> <th>{!! $notice->designation !!}</th>  <th>{!! $notice->data !!}</th> 
                    <th>{!! $notice->description !!}</th>  <th>{!! $notice->documentfile !!}</th>
                                    <td>
                                        <form action="{{ route('admin.notice.destroy', $notice->id) }}" method="POST">
                                        <a href="{{route( 'admin.notice.edit', $notice->id)}}" class="button">Изменить</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" >Удалить</button>
                                        </form>
                                    </td>
                    @endforeach
			        </table>
                    <div > {{$notices->links()}}  </div> 
					<ul class="actions">
						<li><a href="{{route('admin.management')}}" class="button"> Назад</a></li>
					</ul>
</section>