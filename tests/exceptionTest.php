<?php declare(strict_types=1); namespace treehousetim\exception\test;

//use treehousetim\exception\test\testException as testException;
use treehousetim\exception\Exception as Exception;
use PHPUnit\Framework\TestCase;

final class exceptionTest extends TestCase
{
	public function testMessage()
	{
		$this->expectException( testException::class );
		$this->expectExceptionMessage( 'You' . PHP_EOL . 'Might' . PHP_EOL . 'Have' . PHP_EOL . 'a' . PHP_EOL . 'problem' );

		throw new testException(
			'You',
			'Might',
			'Have',
			'a',
			'problem'
		);
	}
	//------------------------------------------------------------------------
	public function testSubclass()
	{
		$this->expectException( testException::class );
		$this->expectExceptionCode( Exception::undefined );

		throw new testException(
			'You',
			'Might',
			'Have',
			'a',
			'problem',
			Exception::undefined
		);
	}
	//------------------------------------------------------------------------
	public function testCode()
	{
		$this->expectException( testException::class );
		$this->expectExceptionCode( testException::testException );

		throw new testException(
			'You',
			'Might',
			'Have',
			'a',
			'problem',
			testException::testException
		);
	}
	//------------------------------------------------------------------------
	public function testMessageAndCode()
	{
		$this->expectException( testException::class );
		$this->expectExceptionCode( Exception::undefined );
		$this->expectExceptionMessage( 'You' . PHP_EOL . 'Might' . PHP_EOL . 'Have' . PHP_EOL . 'a' . PHP_EOL . 'problem' );

		throw new testException(
			'You',
			'Might',
			'Have',
			'a',
			'problem',
			testException::undefined
		);
	}
}