<?php

namespace common\models\masters;

/**
 * This is the ActiveQuery class for [[Combovalores]].
 *
 * @see Combovalores
 */
class CombovaloresQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Combovalores[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Combovalores|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
