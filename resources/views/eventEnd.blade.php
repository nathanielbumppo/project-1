

@extends('layouts.main')

@section('content')
	<div class="section">
		<div class="container">
			<div class="page-content-wrapper__content">
				<aside class="page-aside-block">
					@include('block.sideMenu')

					@include('block.asideMap')
				</aside>

				<div class="page-content">
					@include('block.breadcrumbs')

					<div class="inner-event _mgb40">
						<div class="inner-event__row">
							<div class="inner-event__text">
								Мотопробег Одесса - Львов
							</div>

							<div class="inner-event__rating">
								@svg('star')

								<div><span>4.9</span> из 5</div>

								<span>(14 оценок)</span>
							</div>

							<div class="inner-event__button">
								<button class="button paper-button paper-button--hover button--white button--md _mgla" data-ripple-color="#b7b7b7">
							      	<div class="button__content">
							      		<span class="button__text">Оценить</span>
							      	</div>
							    </button>

							    <div class="mini-modal">
							    	<form class="rating-form">

							    	</form>
							    </div>
							</div>
						</div>

						<div class="inner-event__image">
							<img src="{{ URL::asset('images/event_image2_825x400.jpg') }}">
						</div>

						<div class="inner-event__user">
							<div class="inner-event__user-image">
								<img src="{{ URL::asset('images/profile_50x50.jpg') }}">
							</div>

							<div class="inner-event__user-row">
								<div class="inner-event__user-name">
									<span>Александр Зинченко</span>

									<div class="inner-event__user-city">
										@svg('marker')

										<span>
											Одесса,UA
										</span>
									</div>
								</div>

								<div class="inner-event__user-rep">
									Репутация: <span>195</span>
								</div>
							</div>

							<div class="inner-event__user-buttons">
								<button class="button paper-button paper-button--hover button--white button--mds button--icon-left" data-ripple-color="#b7b7b7">
		                         	<div class="button__content">
		                            	@svg("heart")
		                            	<span class="button__text">Нравится</span>
		                            </div>
		                        </button>

		                        <button class="button paper-button paper-button--hover button--white button--mds button--icon-left" data-ripple-color="#b7b7b7">
		                          	<div class="button__content">
			                            @svg("comment")
			                            <span class="button__text">Коментировать</span>
		                        	</div>
		                        </button>
							</div>
						</div>

						<div class="inner-event__tabs">
							<div class="inner-event__tabs-row">
								<div class="inner-event__tab-button paper-button is-active" data-ripple-color="#b7b7b7">
									<div class="inner-event__tab-button-i">Описание события</div>
								</div>

								<div class="inner-event__tab-button paper-button" data-ripple-color="#b7b7b7">
									<div class="inner-event__tab-button-i">Участники</div>
								</div>

								<div class="inner-event__tab-widgets">
									<div class="widget-button-block">
										@svg('eye')

										<span>231</span>
									</div>

									<div class="widget-button-block">
										@svg('heart')

										<span>6341</span>
									</div>

									<div class="widget-button-block">
										@svg('comment')

										<span>99</span>
									</div>
								</div>
							</div>

							<div class="inner-event__tabs-content">
								<div class="inner-event__tab">
									<div class="wysiwyg wysiwyg--about">
										<p style="color: #333; font-weight: normal;">
											О пробеге в целом:
										</p>

										<p style="font-weight: 300;">
													Начнем мы в Одессе. Таким образом, новая модель организационной деятельности играет важную роль в формировании экономической целесообразности принимаемых решений. Равным образом постоянный количественный рост и сфера нашей активности способствует повышению актуальности ключевых компонентов планируемого обновления.
													С другой стороны сложившаяся структура организации напрямую зависит от существующих финансовых и административных условий.
										</p>

										<p style="text-align: center;">
											<img src="{{ URL::asset('/images/demoImage2.jpg') }}" alt="" title="">
										</p>

										<p style="color: #333; font-weight: normal;">
											О том что нужно знать:
										</p>

										<p style="font-weight: 300;">
													Начнем мы в Одессе. Таким образом, новая модель организационной деятельности играет важную роль в формировании экономической целесообразности принимаемых решений. Равным образом постоянный количественный рост и сфера нашей активности способствует повышению актуальности ключевых компонентов планируемого обновления.
													С другой стороны сложившаяся структура организации напрямую зависит от существующих финансовых и административных условий.
										</p>
									</div>

									<div class="inner-event__date">
										Опубликовано 12.03.17
									</div>
								</div>
							</div>

							<div class="inner-event__comments">
								@include ('block.comments')
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
