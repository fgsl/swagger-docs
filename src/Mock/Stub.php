<?php
namespace Mock;
/**
 * @OA\Info(title="My First API", version="0.1")
 */

class Stub
{
    /**
     * @OA\Get(
     *     path="/api/resource.json",
     *     @OA\Response(response="200", description="An example resource")
     * )
     */
    public function showSomething()
    {
        echo 'something';
    }
}
