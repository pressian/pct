			<aside id="sidebar"><!-- sidebar -->
				<div class="form-2">
				<h1><span class="name"><? echo $_SESSION['pname']; ?></span><span class="welcometext">조합원님 환영합니다!</span></h1>
				<p class="float">		
					<label for="login"><i class="icon-user"></i> 필명 : 아사검</label>
				</p>
				<p class="clearfix"> 
					<a href="javascript:logout()"><input type="button" name="logout" value="로그 아웃"></a>
				</p>
				<p>	
					<a href="#"><input type="button" name="per_mod" value="개인정보수정"></a>
				</p>
				<h3>조합원 메뉴</h3>
				<label for="menu1"><a href="index.php"><i class="icon-th"></i> 금월 일정</a></label>
				<label for="menu2"><a href="#"><i class="icon-info-sign"></i> 조합 공지</a></label>	
					<label for="menu3"><a href="javascript:board('FREE')"><i class="icon-list"></i> 자유 게시판</a></label>			
					<label for="menu4"><a href="#"><i class="icon-picture"></i> 사진 게시판</a></label>		
					<label for="menu5"><a href="#"><i class="icon-flag"></i> 강연 정보</a></label>	
				</div>		

				<h3>프레시안 소셜네트워크</h3>
					<ul>
						<li><a href="https://twitter.com/pressian_news" target="_blank">Twitter</a></li>
						<li><a href="https://www.facebook.com/pressian.news" target="_blank">Facebook</a></li>
					</ul>

		</aside><!-- end of sidebar -->
