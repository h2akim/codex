<?php

namespace Laravie\Codex;

abstract class Cast
{
    /**
     * Cast value from object.
     *
     * @param  object  $value
     *
     * @return mixed
     */
    public function from($value)
    {
        return $this->isValid($value)
                    ? $this->fromCast($value)
                    : $value;
    }

    /**
     * Cast value to object.
     *
     * @param  mixed  $value
     *
     * @return object|null
     */
    public function to($value)
    {
        return ! is_null($value)
                    ? $this->toCast($value)
                    : null;
    }

    /**
     * Is value a valid object.
     *
     * @param  mixed  $value
     *
     * @return bool
     */
    abstract protected function isValid($value);

    /**
     * Cast value from object.
     *
     * @param  object  $value
     *
     * @return mixed
     */
    abstract protected function fromCast($value);

    /**
     * Cast value to object.
     *
     * @param  mixed  $value
     *
     * @return object
     */
    abstract protected function toCast($value);
}
