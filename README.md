# これはなに？

きょーくりテキスト作成ツールはきょーくり内部向けのテキスト作成アプリケーションです。

Markdown->HTMLの変換にはGithub Markdown API( http://developer.github.com/v3/markdown/ )を利用しています。

HTML->PDFにはmPDF( http://www.mpdf1.com/mpdf/index.php )を利用しています。

フォントにはRicty（ http://save.sys.t.u-tokyo.ac.jp/~yusa/fonts/ricty.html ）を利用しています。

またhtml部分は http://blog.tojiru.net/article/282553095.html を参考にしています。

# 使い方
1. 画面上部のテキストエリアにMarkdownでテキストを作成する。
2. 「変換」を押すと画面下の枠にHTMLが出力されます。
3. HTMLの出力を確認して細部を修正。
4. 問題なければ「PDF生成」を押すとPDFが生成されるので保存してDropboxとかに上げてください

# todo
- Markdownの入力を補助するためのボタンなどが入ったツールボックス
- 画像アップロード機能の実装
- データベースを実装してテキストの保存管理機能を付ける
	- バージョン管理も出来るとなお良い？
