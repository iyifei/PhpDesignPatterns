<?php
/**
 * Class [CompositeTest]
 * 组合模式单元测试
 * author minyifei
 * date 2019/2/15
 */

namespace Test\CreationalPatterns\Composite;


use Demo\CreationalPatterns\Composite\Form;
use Demo\CreationalPatterns\Composite\FormItem;
use Demo\CreationalPatterns\Composite\InputElement;
use Demo\CreationalPatterns\Composite\LabelElement;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{

    public function testRender()
    {
        $form = new Form();

        $username = new FormItem();
        $username->addElement(new LabelElement('Username:'));
        $username->addElement(new InputElement('username'));
        $form->addElement($username);

        $password = new FormItem();
        $password->addElement(new LabelElement('Password:'));
        $password->addElement(new InputElement('password'));
        $form->addElement($password);

        $this->assertEquals(
            '<form><div><label>Username:</label><input type="text" id="username" name="username" /></div><div><label>Password:</label><input type="text" id="password" name="password" /></div></form>',
            $form->render()
        );

    }

}