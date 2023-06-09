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
use App\JsonRpc\Interface\GoodsServiceInterface;
use Hyperf\Di\Annotation\Inject;

class IndexController extends AbstractController
{

    #[Inject]
    protected GoodsServiceInterface $GoodsRpcService;

    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();
        $user = $this->GoodsRpcService->getUpperName($user);
        return [
            'method' => $method,
            'message' => "Hello $user.",
        ];
    }
}
