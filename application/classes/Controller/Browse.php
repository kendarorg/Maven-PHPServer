<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Browse extends Controller {

	public function action_index()
	{
		$req_dump = print_r($this->request->headers() . ' ', TRUE);
		$req_dump .= $this->request->method() . ' => ' . $this->request->url() . ' (' . print_r($this->request->param(), TRUE) . ')';
		$fp = fopen(REPOPATH . 'request.log', 'a');
		fwrite($fp, $req_dump);
		fclose($fp);
		
		$filename = realpath(REPOPATH . $this->request->param('file'));
		$currenturl = $this->request->detect_uri();
		if (file_exists($filename)) {
			if (is_dir($filename)) {
				$dircontent = scandir($filename);
				
				$view = View::factory('browse/browser');
				$view->isRoot = strlen($this->request->param('file')) == 0;
				$view->currentpath = $this->endsWith($filename, '/') ? $filename : $filename . '/';
				$view->currenturl = $this->endsWith($currenturl, '/') ? $currenturl : $currenturl . '/';
				$view->dircontent = $dircontent;
 
				$this->response->body($view);
			} else {
				// header('Content-Description: File Transfer');
				// header('Content-Type: application/octet-stream');
				// header('Content-Disposition: attachment; filename='.basename($file));
				// header('Content-Transfer-Encoding: binary');
				// header('Expires: 0');
				// header('Cache-Control: must-revalidate');
				// header('Pragma: public');
				// header('Content-Length: ' . filesize($file));
				// ob_clean();
				// flush();
				// readfile($file);
				$this->response->send_file($filename);
			}
		} else {
			throw HTTP_Exception::factory(404, 'File not found!');
		}
		// $this->response->body('browse: ' . $file);
		
	}
	
	function endsWith($haystack, $needle)
	{
    	return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
	}

} // End Welcome
