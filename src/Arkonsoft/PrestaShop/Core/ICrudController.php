<?php

namespace Arkonsoft\Prestashop\Core;

interface ICrudController
{
    public function actionIndex();

    public function actionView(int $id);

    public function actionCreate(int $id);

    public function actionUpdate(int $id);

    public function actionDelete(int $id);
}
