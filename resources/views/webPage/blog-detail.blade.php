@extends('webPage.main')
@section('content')
		<!-- Heading Start -->
		<section class="page-heading haslayout">
			<div class="container">
				<div class="row">
					<h1>Blog - Single Post</h1>
				</div>
			</div>
		</section>
		<!-- Heading End -->
		<!-- Gallery Start -->
		<div class="blog-post haslayout">
			<div class="container">
				<div class="row">
					<article class="post single">
						<div class="post-img">
							<a href="#"><img src="images/blog-post/img10.jpg" alt="image description"></a>
							<ul class="post-meta">
								<li><a href="#">Karen Memphis</a><em> Admin</em></li>
							</ul>
						</div>
						<h2>An Awesome Triathlon For Everyone Of Us</h2>
						<span class="date">21 may, 2015</span>
						<div class="description">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies, odio at congue tincidunt, libero odio tincidunt est, vel sollicitudin purus odio non leo. Vestibulum vel congue quam, sed convallis elit. Etiam porta, elit ut pharetra finibus, justo odio sagittis libero, eu ullamcorper sem lectus sit amet neque. Donec ultricies erat eu massa feugiat commodo. Nunc id tristique orci. Donec dignissim lacinia velit in semper. Sed malesuada, augue sit amet mattis finibus, erat lacus viverra nibh, vitae semper tortor erat interdum purus. Etiam gravida at lorem in hendrerit. Integer quis neque justo. Ut pellentesque feugiat tortor nec blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Donec sit amet vestibulum nisi, quis aliquet neque. Aenean turpis risus, luctus eu accumsan eget, consectetur eu quam.</p>
							<blockquote><q>Phasellus sodales dignissim lacus, aliquam accumsan eros interdum ut. Aliquam in placerat felis. Duis a urna vitae justo efficitur sagittis. Aenean turpis risus, luctus eu accumsan eget, consectetur eu quam.</q></blockquote>
							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur porta laoreet accumsan. Phasellus condimentum eget lacus nec convallis. Mauris varius justo porta, hendrerit turpis ut, feugiat metus. Phasellus vel nunc id augue sodales bibendum et facilisis ante. Maecenas lacinia vulputate lorem, non pellentesque tellus laoreet ac. Donec id lobortis arcu, ut faucibus risus. Maecenas posuere mi id justo accumsan, sed luctus sem semper. Nam ultrices fringilla metus, non dignissim neque convallis nec.</p>
							<p>Maecenas nec ex eu nulla mollis pharetra. Nullam eleifend leo turpis, id dictum ex finibus a. Aenean rutrum at felis vel posuere. Etiam in elit porttitor, consectetur velit id, feugiat risus. Phasellus sodales dignissim lacus, aliquam accumsan eros interdum ut. Suspendisse sit amet sem a neque lobortis porta at sit amet ante. Suspendisse ornare diam id tortor blandit rutrum. Ut id ex in nisi consequat rutrum vitae eget dui. Aliquam in placerat felis. Duis at urna vitae justo efficitur sagittis.</p>
						</div>
					</article>
					<div class="post-comments haslayout">
						<div class="about-author">
							<h4>About The Author</h4>
							<div class="author-meta">
								<div class="author-img">
									<a href="#">
										<img src="images/blog-post/author-img.png" alt="image description" width="53" height="53">
									</a>
								</div>
								<div class="author-details">
									<strong class="author-name">Dana James</strong>
									<span class="author-post">Assistant</span>
								</div>
							</div>
							<div class="author-description">
								<p>People frequently say things on the Internet that they would never say to someone in person. There’s something disinhibiting about the anonymity that the screen provides (thus the bacchanalian antics at masquerade parties). So the more salient you can make each person’s identify. This is why online communities that include photos of the participants are generally better behaved that are text-only.</p>
							</div>
						</div>
						<div id="comment-form">
							<h3>Post Comment</h3>
							<form class="comment-form">
								<fieldset>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Name">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Your Email Address (Will Not Be Published)">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Website URL">
									</div>
									<div class="form-group">
										<textarea placeholder="Your Message..."></textarea>
									</div>
									<div class="form-group">
										<button class="btn-theme red btn-submit">
											<span class="txt">Submit Now</span>
											<span class="round">
												<i class="icon-arrow-right-latest-races"></i>
											</span>
										</button>
									</div>
								</fieldset>
							</form>
						</div>
						<div id="comment">
							<h3>3 Comments</h3>
							<ul>
								<li>
									<div class="author-img">
										<a href="#">
											<img src="images/blog-post/author-img2.png" alt="image description" width="53" height="53">
										</a>
									</div>
									<div class="comment-box">
										<div class="comment-meta">
											<div class="author-details">
												<strong class="author-name">Kevin Dawson</strong>
												<span class="author-post">Managing Director</span>
											</div>
											<div class="reply-date">
												<span class="date">
													<i class="fa fa-calendar-o"></i>
													<em>2 days ago</em>
												</span>
												<span class="btn-reply">
													<a class="fa fa-mail-reply" href="#"></a>
													<em>reply</em>
												</span>
											</div>
										</div>
										<div class="author-description">
											<p>People frequently say things on the Internet that they would never say to someone in person. There’s something disinhibiting about the anonymity that the screen provides (thus the bacchanalian antics at masquerade parties). So the more salient you can make each person’s identify. This is why online communities that include photos of the participants are generally better behaved that are text-only.</p>
										</div>
									</div>
									<ul>
										<li>
											<div class="author-img">
												<a href="#">
													<img src="images/blog-post/author-img3.png" alt="image description" width="53" height="53">
												</a>
											</div>
											<div class="comment-box">
												<div class="comment-meta">
													<div class="author-details">
														<strong class="author-name">Kevin Dawson</strong>
														<span class="author-post">Managing Director</span>
													</div>
													<div class="reply-date">
														<span class="date">
															<i class="fa fa-calendar-o"></i>
															<em>2 days ago</em>
														</span>
														<span class="btn-reply">
															<a class="fa fa-mail-reply" href="#"></a>
															<em>reply</em>
														</span>
													</div>
												</div>
												<div class="author-description">
													<p>People frequently say things on the Internet that they would never say to someone in person. There’s something disinhibiting about the anonymity that the screen provides (thus the bacchanalian antics at masquerade parties). So the more salient you can make each person’s identify. This is why online communities that include photos of the participants are generally better behaved that are text-only.</p>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li>
									<div class="author-img">
										<a href="#">
											<img src="images/blog-post/author-img4.png" alt="image description" width="53" height="53">
										</a>
									</div>
									<div class="comment-box">
										<div class="comment-meta">
											<div class="author-details">
												<strong class="author-name">Kevin Dawson</strong>
												<span class="author-post">Managing Director</span>
											</div>
											<div class="reply-date">
												<span class="date">
													<i class="fa fa-calendar-o"></i>
													<em>2 days ago</em>
												</span>
												<span class="btn-reply">
													<a class="fa fa-mail-reply" href="#"></a>
													<em>reply</em>
												</span>
											</div>
										</div>
										<div class="author-description">
											<p>People frequently say things on the Internet that they would never say to someone in person. There’s something disinhibiting about the anonymity that the screen provides (thus the bacchanalian antics at masquerade parties). So the more salient you can make each person’s identify. This is why online communities that include photos of the participants are generally better behaved that are text-only.</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- More Articles Start -->
					<div class="more-articles">
						<h2>More Articles</h2>
						<div class="posts row">
							<article class="post col-sm-4">
								<div class="post-img">
									<figure>
										<img src="images/blog-post/img1.jpg" alt="image description">
										<div class="plus-sign">
											<div class="tg-display-table">
												<div class="tg-display-table-cell">
													<a href="#"><i class="fa fa-plus"></i></a>
												</div>
											</div>
										</div>
										<div class="mask"></div>
									</figure>
								</div>
								<ul class="post-meta">
									<li><a href="#">Karen Memphis</a> Admin</li>
								</ul>
								<h2><a href="#">Ride The Bike In A Hard Way</a></h2>
								<div class="description">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum libero et nibh convallis, quis estei lacinia erat commodo.</p>
								</div>
							</article>
							<article class="post col-sm-4">
								<div class="post-img">
									<figure>
										<img src="images/blog-post/img1.jpg" alt="image description">
										<div class="plus-sign">
											<div class="tg-display-table">
												<div class="tg-display-table-cell">
													<a href="#"><i class="fa fa-plus"></i></a>
												</div>
											</div>
										</div>
										<div class="mask"></div>
									</figure>
								</div>
								<ul class="post-meta">
									<li><a href="#">Karen Memphis</a> Admin</li>
								</ul>
								<h2><a href="#">Ride The Bike In A Hard Way</a></h2>
								<div class="description">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum libero et nibh convallis, quis estei lacinia erat commodo.</p>
								</div>
							</article>
							<article class="post col-sm-4">
								<div class="post-img">
									<figure>
										<img src="images/blog-post/img1.jpg" alt="image description">
											<div class="plus-sign">
											<div class="tg-display-table">
												<div class="tg-display-table-cell">
													<a href="#"><i class="fa fa-plus"></i></a>
												</div>
											</div>
										</div>
										<div class="mask"></div>
									</figure>
								</div>
								<ul class="post-meta">
									<li><a href="#">Karen Memphis</a> Admin</li>
								</ul>
								<h2><a href="#">Ride The Bike In A Hard Way</a></h2>
								<div class="description">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum libero et nibh convallis, quis estei lacinia erat commodo.</p>
								</div>
							</article>
						</div>
					</div>
					<!-- More Articles End -->
				</div>
			</div>
		</div>
		<!-- Gallery End -->
		<!-- Competitors Start -->
		            <div class="competitor-section haslayout">
                <div class="container">
                    <div class="row">
                        <div class="competitor">
                            <div class="col-sm-5 col-xs-12 pull-right">
                                <div class="border-title">
                                    <h2>Learn more about dwarfing your <strong>competitors.</strong></h2>
                                </div>
                                <form class="competitor-form" name="contactform" method="post" action="http://786themes.net/html/triathlon/triathlon/php/contact.php">
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="email" data-error="Email address is invalid" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="How Can We Help?" name="message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn-theme red btn-submit" type="submit">
                                                <span class="txt">Contact Us</span>
                                                <span class="round">
                                                    <i class="icon-arrow-right-latest-races"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="col-sm-7 col-xs-12 pull-left competitor-img">
                                <img src="images/img11.png" alt="image description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<!-- Competitors End -->
		@endsection