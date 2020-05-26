<?php

it('can numerify with hash sign', function () {
    $value = (int) callPrivateFakeMethod('numerify', '###');

    $this->assertMatchesRegularExpression('/^[\d]{0,3}$/', $value);
});

it('can hexify with hash sign', function () {
    $value = callPrivateFakeMethod('hexify', '###');

    $this->assertMatchesRegularExpression('/^[a-z0-9]{3}$/', $value);
});

it('can hexify arrays', function () {
    $testArray = [
        '#',
        '##',
        '###',
    ];

    $result = callPrivateFakeMethod('hexify', $testArray);

    foreach ($result as $item) {
        $this->assertMatchesRegularExpression('/^[a-z0-9]{1,3}$/', $item);
    }
});

it('can numerify with percentage sign', function () {
    $value = (int) callPrivateFakeMethod('numerify', '%%%');

    $this->assertMatchesRegularExpression('/^[\d]{3}$/', $value);
});

it('can numerify arrays', function () {
    $testArray = [
        '##',
        '%%',
        '#%',
    ];

    $result = callPrivateFakeMethod('numerify', $testArray);

    foreach ($result as $item) {
        $this->assertMatchesRegularExpression('/^[\d]{1,2}$/', (int) $item);
    }
});

it('can letterify', function () {
    $value = callPrivateFakeMethod('letterify', '???');

    $this->assertMatchesRegularExpression('/^[\w]{3}$/', $value);
});

it('can letterify arrays', function () {
    $testArray = [
        '?',
        '??',
        '???',
    ];

    $result = callPrivateFakeMethod('letterify', $testArray);

    foreach ($result as $item) {
        $this->assertMatchesRegularExpression('/^[A-Za-z]{1,3}$/', $item);
    }
});

it('can bothify', function () {
    $value = callPrivateFakeMethod('bothify', '?#%');

    $this->assertMatchesRegularExpression('/^[\w]{3}$/', $value);
});

it('can bothify with asterix', function () {
    $value = callPrivateFakeMethod('bothify', '***');

    $this->assertMatchesRegularExpression('/^[\w]{3}$/', $value);
});

it('can bothify arrays', function () {
    $testArray = [
        '#',
        '?',
        '*',
        '**',
        '#?*',
    ];

    $result = callPrivateFakeMethod('bothify', $testArray);

    foreach ($result as $item) {
        $this->assertMatchesRegularExpression('/^[\w]{1,3}$/', $item);
    }
});
