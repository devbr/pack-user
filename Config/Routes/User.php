<?php

	$router->respond('get', '/user',        'User\Page::index')
	       ->respond('get', '/u/\?(.*)',    'User\Page::index')
	       ->respond('get', 'u/login',      'User\Page::login')

           //AJAX ----------
           ->respond('post', 'x/put',       'User\Ajax::put')
           ->respond('post', 'x/save',      'User\Ajax::save')
           ->respond('post', 'x/checklink', 'User\Ajax::checkLink')
           ->respond('post', 'x/delete/(?<id>(\d+)?)', 'User\Ajax::delete')
           ->respond('post', 'x/upload/(?<id>(\d+)?)', 'User\Ajax::upload')

           //ADMIN
           ->respond('get', 'u/admin',      'User\Admin::index')
           ->respond('get', 'u/admin/(\d+)/(\d+)/(\d+)', 'User\Admin::pagination');