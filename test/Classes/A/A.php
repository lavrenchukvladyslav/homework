<?php
namespace A
{
    class A
    {
        public static function say()
        {
            echo 'Я пространство имен А';
        }
    }

}

namespace A\subA
{
    class A
    {
        public static function say()
        {
            echo 'Я подпространство имен А';
        }
    }
}