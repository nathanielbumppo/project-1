

				<div class="site-search__results-row" data-search-row="photo">
					<div class="site-search__result-aside">
						<div class="site-search__result-name">
							Фотографии
						</div>
					</div>

					<div class="site-search__result-content">
						@for ($i = 0; $i < 5; $i++)
						<div class="site-search__regular-item">
							@include('block.photoblock')
						</div>
						@endfor

						<div class="site-search__regular-item">
							<a href='#' class="button paper-button paper-button--hover button--grey button--md" data-ripple-color="#b7b7b7">
		                     	<div class="button__content">
		                        	<span class="button__text">Смотреть все</span>
		                        </div>
		                    </a>
						</div>
					</div>
				</div>