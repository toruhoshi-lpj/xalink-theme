<?php
/*
汎用コンテント
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'wysiwyg' ); ?> role="main">
	<div class="entry-header">
		<header>
			<p class="meta">
				<time datetime="<?php echo get_the_date('Y-m-d') ?>"><?php the_time('Y年m月d日'); ?></time>
				<span><?php $posttags = get_the_tags();
					if ($posttags) {
						foreach($posttags as $tag) {
							echo '【' . $tag->name . '】';
						}
					}
					?></span>
			</p>
			<?php the_title( '<h1>', '</h1>' ); ?>
		</header>
	</div>
<?php
	the_content( sprintf( 'Continue reading<span> "%s"</span>', get_the_title()) );

	wp_link_pages( array(
		'before'	  => '<div class="page-links"><span class="page-links-title">ページ：</span>',
		'after'	   => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'	=> '<span class="screen-reader-text">ページ </span>',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
?>
	<section>
		<div style="background: #eee; padding: 0.5em; font-weight: bold; font-size: 1.25em; text-align: center;">見出し</div>
		<h1>見出し１〈h1〉
			見出し１〈h1〉</h1>
		<div style="padding: 0.25em; background: #eee;"></div>
		<h2>見出し２〈h2〉
			見出し２〈h2〉</h2>
		<div style="padding: 0.25em; background: #eee;"></div>
		<h3>見出し３〈h3〉
			見出し３〈h3〉</h3>
		<div style="padding: 0.25em; background: #eee;"></div>
		<h4>見出し４〈h4〉</h4>
		<div style="padding: 0.25em; background: #eee;"></div>
		<h5>見出し５〈h5〉</h5>
		<div style="padding: 0.25em; background: #eee;"></div>
		<h6>見出し６〈h6〉</h6>
	</section><section>
	<div style="background: #eee; padding: 0.5em; font-weight: bold; font-size: 1.25em; text-align: center;">テキスト</div>
	段落〈p〉このHTMLの目的は、CSSが初期状態でHTML要素にどのようにあたるかをチェックして、サイトの表示崩れを確認し、バグをなくすためのソースです。
	<div style="padding: 0.25em; background: #eee;"></div>
	□□□<a href="#root">アンカーテキスト〈a〉</a>□□□□（訪問済み、アクティブ、ホバー時）
	<div style="padding: 0.25em; background: #eee;"></div>
	□□□<strong>強調〈strong〉</strong>□□□□
	<div style="padding: 0.25em; background: #eee;"></div>
	□□□<em>強調文字〈em〉</em>□□□□
	<div style="padding: 0.25em; background: #eee;"></div>
	□□□<i>イタリック〈i〉</i>□□□□
	<div style="padding: 0.25em; background: #eee;"></div>
	□□□<small>注釈などの小さい文字〈small〉</small>□□□□
	<div style="padding: 0.25em; background: #eee;"></div>
	□□□<sup>上付き文字〈sup〉</sup>□□□□
	<div style="padding: 0.25em; background: #eee;"></div>
	□□□<sub>下付き文字〈sub〉</sub>□□□□
	<div style="padding: 0.25em; background: #eee;"></div>
	□□□<q>引用文(文書の一部や一文)〈strong〉</q>□□□□
	<div style="padding: 0.25em; background: #eee;"></div>
	<blockquote>引用文（ブロック）〈Blockquote〉□□□□</blockquote>
	<div style="padding: 0.25em; background: #eee;"></div>
	<cite>引用元・参考文献〈cite〉</cite>
	<div style="padding: 0.25em; background: #eee;"></div>
	<pre>整形済みテキスト〈pre〉□□□□</pre>
	<div style="padding: 0.25em; background: #eee;"></div>
	<code>ソースコード〈code〉□□□□</code>
	<div style="padding: 0.25em; background: #eee;"></div>
	□□□<ins>追記〈ins〉</ins>□□□□
	<div style="padding: 0.25em; background: #eee;"></div>
	□□□<del>打ち消し〈del〉</del>□□□□
	<div style="padding: 0.25em; background: #eee;"></div>
	□□□<acronym title="National Basketball Association">NBA（頭文字をとった略語〈acronym〉）</acronym>□□□□
	<div style="padding: 0.25em; background: #eee;"></div>
	□□□<abbr title="Avenue">AVE（略語〈abbr〉）</abbr>□□□□

	</section><section>
	<div style="background: #eee; padding: 0.5em; font-weight: bold; font-size: 1.25em; text-align: center;">定義リスト〈dl〉</div>
	<dl>
		<dt>定義語〈dt〉</dt>
		<dd>定義語の意味〈dd〉このHTMLの目的は、CSSが初期状態でHTML要素にどのようにあたるかをチェックして、サイトの表示崩れを確認し、バグをなくすためのソースです。</dd>
	</dl>
	</section><section>
	<div style="background: #eee; padding: 0.5em; font-weight: bold; font-size: 1.25em; text-align: center;">番号ありリスト〈ol〉</div>
	<ol>
		<li>番号ありリスト〈li〉</li>
		<li>番号ありリスト〈li〉</li>
		<li>番号ありリスト〈li〉このHTMLの目的は、CSSが初期状態でHTML要素にどのようにあたるかをチェックして、サイトの表示崩れを確認し、バグをなくすためのソースです。</li>
		<li>番号ありリスト
			<ol>
				<li>番号ありリスト〈li〉</li>
				<li>番号ありリスト〈li〉</li>
				<li>番号ありリスト〈li〉</li>
				<li>番号ありリスト〈li〉
					<ol>
						<li>番号ありリスト〈li〉</li>
						<li>番号ありリスト〈li〉</li>
						<li>番号ありリスト〈li〉</li>
						<li>番号ありリスト〈li〉
							<ol>
								<li>番号ありリスト〈li〉</li>
								<li>番号ありリスト〈li〉</li>
								<li>番号ありリスト〈li〉</li>
								<li>番号ありリスト〈li〉</li>
								<li>番号ありリスト〈li〉</li>
							</ol>
						</li>
						<li>番号ありリスト〈li〉</li>
					</ol>
				</li>
				<li>番号ありリスト〈li〉</li>
			</ol>
		</li>
		<li>番号ありリスト〈li〉</li>
	</ol>
	</section><section>
	<div style="background: #eee; padding: 0.5em; font-weight: bold; font-size: 1.25em; text-align: center;">番号なしリスト〈ul〉</div>
	<ul>
		<li>番号なしリスト〈li〉</li>
		<li>番号なしリスト〈li〉</li>
		<li>番号なしリスト〈li〉このHTMLの目的は、CSSが初期状態でHTML要素にどのようにあたるかをチェックして、サイトの表示崩れを確認し、バグをなくすためのソースです。</li>
		<li>番号なしリスト
			<ul>
				<li>番号なしリスト〈li〉</li>
				<li>番号なしリスト〈li〉</li>
				<li>番号なしリスト〈li〉</li>
				<li>番号なしリスト〈li〉
					<ul>
						<li>番号なしリスト〈li〉</li>
						<li>番号なしリスト〈li〉</li>
						<li>番号なしリスト〈li〉</li>
						<li>番号なしリスト〈li〉
							<ul>
								<li>番号なしリスト〈li〉</li>
								<li>番号なしリスト〈li〉</li>
								<li>番号なしリスト〈li〉</li>
								<li>番号なしリスト〈li〉</li>
								<li>番号なしリスト〈li〉</li>
							</ul>
						</li>
						<li>番号なしリスト〈li〉</li>
					</ul>
				</li>
				<li>番号なしリスト〈li〉</li>
			</ul>
		</li>
		<li>番号なしリスト〈li〉</li>
	</ul>
	</section><section>
	<div style="background: #eee; padding: 0.5em; font-weight: bold; font-size: 1.25em; text-align: center;">テーブル〈table〉</div>
	<!--ページ生成時に追加-->
	<div class="table-scroll"><!--ページ生成時に追加-->
		<table><caption>テーブルのキャプション〈caption〉</caption>
			<thead>
				<tr>
					<th>ヘッダー行の見出しセル〈thead&gt;tr&gt;th〉</th>
					<td>ヘッダー行のデータセル〈thead&gt;tr&gt;td〉</td>
					<td>ヘッダー行のデータセル〈thead&gt;tr&gt;td〉</td>
					<td>ヘッダー行のデータセル〈thead&gt;tr&gt;td〉</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>ボディ行の見出しセル〈tbody&gt;tr&gt;th〉</th>
					<td>ボディ行のデータセル〈tbody&gt;tr&gt;td〉</td>
					<td>ボディ行のデータセル〈tbody&gt;tr&gt;td〉</td>
					<td>ボディ行のデータセル〈tbody&gt;tr&gt;td〉</td>
				</tr>
				<tr>
					<th>ボディ行の見出しセル〈tbody&gt;tr&gt;th〉</th>
					<td>ボディ行のデータセル〈tbody&gt;tr&gt;td〉</td>
					<td>ボディ行のデータセル〈tbody&gt;tr&gt;td〉</td>
					<td>ボディ行のデータセル〈tbody&gt;tr&gt;td〉</td>
				</tr>
				<tr>
					<th>ボディ行の見出しセル〈tbody&gt;tr&gt;th〉</th>
					<td>ボディ行のデータセル〈tbody&gt;tr&gt;td〉</td>
					<td>ボディ行のデータセル〈tbody&gt;tr&gt;td〉</td>
					<td>ボディ行のデータセル〈tbody&gt;tr&gt;td〉</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th>フッター行の見出しセル〈tfoot&gt;tr&gt;th〉</th>
					<td>フッター行のデータセル〈tfoot&gt;tr&gt;td〉</td>
					<td>フッター行のデータセル〈tfoot&gt;tr&gt;td〉</td>
					<td>フッター行のデータセル〈tfoot&gt;tr&gt;td〉</td>
				</tr>
			</tfoot>
		</table>
		<!--ページ生成時に追加-->

	</div>
	<!--ページ生成時に追加-->

	</section><section>
	<div style="background: #eee; padding: 0.5em; font-weight: bold; font-size: 1.25em; text-align: center;">フォーム</div>
	<form>
		<fieldset><legend>フォームの入力項目をグループタイトル〈Legend〉</legend>フォームの入力項目をグループ化〈fieldset〉</fieldset>
	</form>
	<div style="padding: 0.25em; background: #eee;"></div>
	<label for="text_field">テキストフィールド</label><input id="text_field" type="text" />
	<div style="padding: 0.25em; background: #eee;"></div>
	<label for="text_area">テキストエリア</label><textarea id="text_area"></textarea>
	<div style="padding: 0.25em; background: #eee;"></div>
	<label for="select_element">セレクト（プルダウン）</label>

	<select name="select_element"><optgroup label="オプショングループ1">
		<option value="1">オプション1</option>
		<option value="2">オプション2</option>
		<option value="3">オプション3</option></optgroup>
	</select>
	<select name="select_element"><optgroup label="オプショングループ2">
		<option value="1">オプション1</option>
		<option value="2">オプション2</option>
		<option value="3">オプション3</option></optgroup>
	</select>
	<div style="padding: 0.25em; background: #eee;"></div>
	<label for="radio_buttons">ラジオボタン</label>
	<label><input class="radio" name="radio_button" type="radio" value="radio_1" /> ラジオボタン1 </label>
	<label><input class="radio" name="radio_button" type="radio" value="radio_2" /> ラジオボタン2 </label>
	<label><input class="radio" name="radio_button" type="radio" value="radio_3" /> ラジオボタン3 </label>
	<div style="padding: 0.25em; background: #eee;"></div>
	<label for="checkboxes">チェックボックス</label>
	<label><input class="checkbox" name="checkboxes" type="checkbox" value="check_1" /> チェックボックス1 </label>
	<label><input class="checkbox" name="checkboxes" type="checkbox" value="check_2" /> チェックボックス2 </label>
	<label><input class="checkbox" name="checkboxes" type="checkbox" value="check_3" /> チェックボックス3 </label>
	<div style="padding: 0.25em; background: #eee;"></div>
	<label for="password">パスワード</label><input class="password" name="password" type="password" />
	<div style="padding: 0.25em; background: #eee;"></div>
	<label for="file">ファイル</label><input class="file" name="file" type="file" />
	<div style="padding: 0.25em; background: #eee;"></div>
	<input type="reset" value="クリアボタン〈input〉" />
	<div style="padding: 0.25em; background: #eee;"></div>
	<button type="reset" value="">クリアボタン〈button〉</button>
	<div style="padding: 0.25em; background: #eee;"></div>
	<input type="submit" value="送信ボタン〈input〉" />
	<div style="padding: 0.25em; background: #eee;"></div>
	<button type="submit" value="">送信ボタン〈button〉</button>
	<div style="padding: 0.25em; background: #eee;"></div>
	<input type="button" value="汎用ボタン〈input〉" />
	<div style="padding: 0.25em; background: #eee;"></div>
	<button type="button" value="">汎用ボタン〈button〉</button>

	</section>
	<div style="padding: 0.5em; background: #eee;"></div>
	<footer>
		<?php if ( is_single() ): ?>
		<div class="back-button-wrapper">
			<a href="<?php echo get_category_link( 2 ); ?>" class="back-button">お知らせ一覧へ戻る</a>
		</div>
		<?php endif; ?>
	</footer>
</article>
