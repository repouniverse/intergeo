<?php

namespace common\models\masters;

/**
 * This is the ActiveQuery class for [[ModelCombo]].
 *
 * @see ModelCombo
 */
class ModelComboQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ModelCombo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ModelCombo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
