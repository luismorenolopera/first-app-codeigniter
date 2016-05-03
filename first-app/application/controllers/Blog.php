<?php
class Blog extends CI_Controller {
  function index()
  {
    $data['todo_list'] = array('Limpiar la casa', 'Llamar a mamá',
    'Hacer los mandados');
    $data['title'] = "Mi Titulo Real";
    $data['heading'] = "Mi Encabezado Real";

    $this->load->view('blogview', $data);
  }
}
?>
