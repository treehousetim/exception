<?php namespace treehousetim\exception;

class Exception extends \LogicException
{
	const undefined = -1;

	public function __construct( ...$message )
	{
		$lastValue = array_pop( $message );

		if( (string)intval( $lastValue ) == $lastValue )
		{
			$code = $lastValue;
		}
		else
		{

			$message[] = $lastValue;
			$code = self::undefined;
		}

		parent::__construct( implode( PHP_EOL, $message ), $code );
	}
}