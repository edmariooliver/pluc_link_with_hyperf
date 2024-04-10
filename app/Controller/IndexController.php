<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Controller;
use App\Model\Link;

class IndexController extends AbstractController
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();
        // $user = Link::create(['link' => 'asdasdasdasdsd', 'id' => "aaaaaaaaaaaaaakakakakakakakakakakaka"]);
        return [
            'method' => $method,
            'message' => Link::all(),
        ];
    }
}
