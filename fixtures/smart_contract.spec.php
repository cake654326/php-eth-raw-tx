<?php

describe("Smart contract ", function () {

    beforeEach(function(){
        $smartContractAuctionBinaries = "6060604052341561000f57600080fd5b604051606080610be483398101604052808051906020019091908051906020019091908051906020019091905050826002819055508160018190555080600081905550806004819055506000600360006101000a81548160ff0219169083151502179055507f0114aab713235b737f82de882833e128d244e12c1b0967b9c49748c123a6f4b183838360405180848152602001838152602001828152602001935050505060405180910390a1505050610b17806100cd6000396000f3006060604052600436106100e6576000357c0100000000000000000000000000000000000000000000000000000000900463ffffffff1680630b97bc86146100eb5780630f76787214610114578063164418131461013d5780632014e5d1146101745780634423c5f1146101a1578063454a2ab31461021d5780634c051f1414610258578063544736e6146102ad5780636f52a711146102da5780637b3529621461030357806382dd9b7714610330578063971c92a814610360578063bef4876b14610389578063c24a0f8b146103b6578063e53dbd7a146103df578063efbe1c1c14610408575b600080fd5b34156100f657600080fd5b6100fe610435565b6040518082815260200191505060405180910390f35b341561011f57600080fd5b61012761043b565b6040518082815260200191505060405180910390f35b341561014857600080fd5b610150610441565b60405180848152602001838152602001828152602001935050505060405180910390f35b341561017f57600080fd5b61018761045a565b604051808215151515815260200191505060405180910390f35b34156101ac57600080fd5b6101c2600480803590602001909190505061047a565b604051808573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020018481526020018381526020018215151515815260200194505050505060405180910390f35b341561022857600080fd5b61023e60048080359060200190919050506104e6565b604051808215151515815260200191505060405180910390f35b341561026357600080fd5b61026b6107e6565b604051808273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200191505060405180910390f35b34156102b857600080fd5b6102c0610890565b604051808215151515815260200191505060405180910390f35b34156102e557600080fd5b6102ed61089d565b6040518082815260200191505060405180910390f35b341561030e57600080fd5b6103166108a3565b604051808215151515815260200191505060405180910390f35b341561033b57600080fd5b6103436108c6565b604051808381526020018281526020019250505060405180910390f35b341561036b57600080fd5b61037361095e565b6040518082815260200191505060405180910390f35b341561039457600080fd5b61039c610963565b604051808215151515815260200191505060405180910390f35b34156103c157600080fd5b6103c9610976565b6040518082815260200191505060405180910390f35b34156103ea57600080fd5b6103f261097c565b6040518082815260200191505060405180910390f35b341561041357600080fd5b61041b610981565b604051808215151515815260200191505060405180910390f35b60015481565b60025481565b6000806000600154925060005491506004549050909192565b6000610464610890565b801561047557506104736108a3565b155b905090565b60058181548110151561048957fe5b90600052602060002090600402016000915090508060000160009054906101000a900473ffffffffffffffffffffffffffffffffffffffff16908060010154908060020154908060030160009054906101000a900460ff16905084565b6000806104f16108c6565b9150506104fc61045a565b151561050b57600091506107e0565b8083101561063557600580548060010182816105279190610a4f565b916000526020600020906004020160006080604051908101604052803273ffffffffffffffffffffffffffffffffffffffff16815260200187815260200142815260200160001515815250909190915060008201518160000160006101000a81548173ffffffffffffffffffffffffffffffffffffffff021916908373ffffffffffffffffffffffffffffffffffffffff160217905550602082015181600101556040820151816002015560608201518160030160006101000a81548160ff0219169083151502179055505050507f3f3880a3434edc55799b6fa2eb84de9f6b4364947a45ded791bac94deae3c0a1836040518082815260200191505060405180910390a1600091506107e0565b600580548060010182816106499190610a4f565b916000526020600020906004020160006080604051908101604052803273ffffffffffffffffffffffffffffffffffffffff16815260200187815260200142815260200160011515815250909190915060008201518160000160006101000a81548173ffffffffffffffffffffffffffffffffffffffff021916908373ffffffffffffffffffffffffffffffffffffffff160217905550602082015181600101556040820151816002015560608201518160030160006101000a81548160ff0219169083151502179055505050507fd04f845137f741f1b1fcb8758a097aa384274dde474ea57dc4b71e88f8625cf3838232604051808481526020018381526020018273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001935050505060405180910390a160b4600054034211156107db5760b442016000819055507fe95bc45419aec7c2c587ae26906bc5d0cd55ce4237d73476f63bc13b36b149556000546040518082815260200191505060405180910390a15b600191505b50919050565b60008060058054905090505b60008114151561088b5760056001820381548110151561080e57fe5b906000526020600020906004020160030160009054906101000a900460ff161561087d5760056001820381548110151561084457fe5b906000526020600020906004020160000160009054906101000a900473ffffffffffffffffffffffffffffffffffffffff16915061088c565b8080600190039150506107f2565b5b5090565b6000600154421015905090565b60045481565b6000600360009054906101000a900460ff16806108c1575060005442115b905090565b600080600060058054905090505b600081141515610953576005600182038154811015156108f057fe5b906000526020600020906004020160030160009054906101000a900460ff16156109455760056001820381548110151561092657fe5b9060005260206000209060040201600101549250600183019150610959565b8080600190039150506108d4565b60025491505b509091565b60b481565b600360009054906101000a900460ff1681565b60005481565b60b481565b600080600360009054906101000a900460ff16806109a0575060005442105b156109ae5760009150610a4b565b6001600360006101000a81548160ff0219169083151502179055506109d16108c6565b5090507f8b1ad6c69d3d79a05f5b1ec0de825e9bf67c6c70b8c25babd159976cf9990dff6109fd6107e6565b82604051808373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020018281526020019250505060405180910390a1600191505b5090565b815481835581811511610a7c57600402816004028360005260206000209182019101610a7b9190610a81565b5b505050565b610ae891905b80821115610ae457600080820160006101000a81549073ffffffffffffffffffffffffffffffffffffffff0219169055600182016000905560028201600090556003820160006101000a81549060ff021916905550600401610a87565b5090565b905600a165627a7a72305820754c1010acd9d786231fb46d9cddd36ece3750a041ba8f62c211cccbe25c2c200029";
        $smartContractAuctionAbi = "[{\"constant\":true,\"inputs\":[],\"name\":\"startDate\",\"outputs\":[{\"name\":\"\",\"type\":\"uint256\"}],\"payable\":false,\"stateMutability\":\"view\",\"type\":\"function\"},{\"constant\":true,\"inputs\":[],\"name\":\"startAmount\",\"outputs\":[{\"name\":\"\",\"type\":\"uint256\"}],\"payable\":false,\"stateMutability\":\"view\",\"type\":\"function\"},{\"constant\":true,\"inputs\":[],\"name\":\"getDates\",\"outputs\":[{\"name\":\"_startDate\",\"type\":\"uint256\"},{\"name\":\"_endDate\",\"type\":\"uint256\"},{\"name\":\"_originalEndDate\",\"type\":\"uint256\"}],\"payable\":false,\"stateMutability\":\"view\",\"type\":\"function\"},{\"constant\":true,\"inputs\":[],\"name\":\"isRunning\",\"outputs\":[{\"name\":\"_running\",\"type\":\"bool\"}],\"payable\":false,\"stateMutability\":\"view\",\"type\":\"function\"},{\"constant\":true,\"inputs\":[{\"name\":\"\",\"type\":\"uint256\"}],\"name\":\"bids\",\"outputs\":[{\"name\":\"user\",\"type\":\"address\"},{\"name\":\"amount\",\"type\":\"uint256\"},{\"name\":\"date\",\"type\":\"uint256\"},{\"name\":\"accepted\",\"type\":\"bool\"}],\"payable\":false,\"stateMutability\":\"view\",\"type\":\"function\"},{\"constant\":false,\"inputs\":[{\"name\":\"_amount\",\"type\":\"uint256\"}],\"name\":\"bid\",\"outputs\":[{\"name\":\"\",\"type\":\"bool\"}],\"payable\":false,\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"constant\":true,\"inputs\":[],\"name\":\"getLeader\",\"outputs\":[{\"name\":\"_leader\",\"type\":\"address\"}],\"payable\":false,\"stateMutability\":\"view\",\"type\":\"function\"},{\"constant\":true,\"inputs\":[],\"name\":\"isStarted\",\"outputs\":[{\"name\":\"_started\",\"type\":\"bool\"}],\"payable\":false,\"stateMutability\":\"view\",\"type\":\"function\"},{\"constant\":true,\"inputs\":[],\"name\":\"originalEndDate\",\"outputs\":[{\"name\":\"\",\"type\":\"uint256\"}],\"payable\":false,\"stateMutability\":\"view\",\"type\":\"function\"},{\"constant\":true,\"inputs\":[],\"name\":\"isFinished\",\"outputs\":[{\"name\":\"_finished\",\"type\":\"bool\"}],\"payable\":false,\"stateMutability\":\"view\",\"type\":\"function\"},{\"constant\":true,\"inputs\":[],\"name\":\"getCurrentAmounts\",\"outputs\":[{\"name\":\"_current\",\"type\":\"uint256\"},{\"name\":\"_minimal\",\"type\":\"uint256\"}],\"payable\":false,\"stateMutability\":\"view\",\"type\":\"function\"},{\"constant\":true,\"inputs\":[],\"name\":\"antiSnippingTriggerPeriod\",\"outputs\":[{\"name\":\"\",\"type\":\"uint256\"}],\"payable\":false,\"stateMutability\":\"view\",\"type\":\"function\"},{\"constant\":true,\"inputs\":[],\"name\":\"finished\",\"outputs\":[{\"name\":\"\",\"type\":\"bool\"}],\"payable\":false,\"stateMutability\":\"view\",\"type\":\"function\"},{\"constant\":true,\"inputs\":[],\"name\":\"endDate\",\"outputs\":[{\"name\":\"\",\"type\":\"uint256\"}],\"payable\":false,\"stateMutability\":\"view\",\"type\":\"function\"},{\"constant\":true,\"inputs\":[],\"name\":\"antiSnippingDuration\",\"outputs\":[{\"name\":\"\",\"type\":\"uint256\"}],\"payable\":false,\"stateMutability\":\"view\",\"type\":\"function\"},{\"constant\":false,\"inputs\":[],\"name\":\"end\",\"outputs\":[{\"name\":\"\",\"type\":\"bool\"}],\"payable\":false,\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"name\":\"_startAmount\",\"type\":\"uint256\"},{\"name\":\"_startDate\",\"type\":\"uint256\"},{\"name\":\"_endDate\",\"type\":\"uint256\"}],\"payable\":false,\"stateMutability\":\"nonpayable\",\"type\":\"constructor\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":false,\"name\":\"startAmount\",\"type\":\"uint256\"},{\"indexed\":false,\"name\":\"startDate\",\"type\":\"uint256\"},{\"indexed\":false,\"name\":\"endDate\",\"type\":\"uint256\"}],\"name\":\"NewAuction\",\"type\":\"event\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":false,\"name\":\"winner\",\"type\":\"address\"},{\"indexed\":false,\"name\":\"amount\",\"type\":\"uint256\"}],\"name\":\"AuctionFinished\",\"type\":\"event\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":false,\"name\":\"amount\",\"type\":\"uint256\"},{\"indexed\":false,\"name\":\"_minimal\",\"type\":\"uint256\"},{\"indexed\":false,\"name\":\"origin\",\"type\":\"address\"}],\"name\":\"BidAccepted\",\"type\":\"event\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":false,\"name\":\"amount\",\"type\":\"uint256\"}],\"name\":\"BidRejected\",\"type\":\"event\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":false,\"name\":\"endDate\",\"type\":\"uint256\"}],\"name\":\"AntiSnippingTriggered\",\"type\":\"event\"},{\"constant\":false,\"inputs\":[{\"name\":\"_address1\",\"type\":\"address[]\"},{\"name\":\"_uint1\",\"type\":\"uint256[]\"}],\"name\":\"tests\",\"outputs\":[{\"name\":\"_address2\",\"type\":\"address[]\"},{\"name\":\"_uint2\",\"type\":\"uint256[]\"}],\"payable\":false,\"stateMutability\":\"nonpayable\",\"type\":\"function\"}]";
        $smartContractFooBinaries = "6060604052341561000f57600080fd5b6103918061001e6000396000f300606060405260043610610057576000357c0100000000000000000000000000000000000000000000000000000000900463ffffffff168063a5643bf21461005c578063cdcd77c014610104578063fce353f614610150575b600080fd5b341561006757600080fd5b610102600480803590602001908201803590602001908080601f01602080910402602001604051908101604052809392919081815260200183838082843782019150505050505091908035151590602001909190803590602001908201803590602001908080602002602001604051908101604052809392919081815260200183836020028082843782019150505050505091905050610196565b005b341561010f57600080fd5b610136600480803563ffffffff16906020019091908035151590602001909190505061028c565b604051808215151515815260200191505060405180910390f35b341561015b57600080fd5b61019460048080604001906002806020026040519081016040528092919082600260200280828437820191505050505091905050610303565b005b7f1426d52d0c36f9161332481a43d185f7641e1a03afe835bd26825fea76cb351083838360405180806020018415151515815260200180602001838103835286818151815260200191508051906020019080838360005b838110156102085780820151818401526020810190506101ed565b50505050905090810190601f1680156102355780820380516001836020036101000a031916815260200191505b50838103825284818151815260200191508051906020019060200280838360005b83811015610271578082015181840152602081019050610256565b505050509050019550505050505060405180910390a1505050565b600060208363ffffffff1611806102a05750815b90507fa4012e55d28643aa3afd809e759331bf1b5a9581609523c61dbb80327c860c8c838383604051808463ffffffff1663ffffffff1681526020018315151515815260200182151515158152602001935050505060405180910390a192915050565b7fa1d06154b558126189069ad83a9101e6312f338ca9d22ca6c4f4ef9d7701a7ed816040518082600260200280838360005b83811015610350578082015181840152602081019050610335565b5050505090500191505060405180910390a1505600a165627a7a72305820883f1fbeefc82ff18e1a3f30b65196da4c79ec0d82688ddff056d9d70f5100300029";
        $smartContractFooAbi = "[{\"constant\":false,\"inputs\":[{\"name\":\"a\",\"type\":\"bytes\"},{\"name\":\"b\",\"type\":\"bool\"},{\"name\":\"c\",\"type\":\"uint256[]\"}],\"name\":\"sam\",\"outputs\":[],\"payable\":false,\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"constant\":false,\"inputs\":[{\"name\":\"x\",\"type\":\"uint32\"},{\"name\":\"y\",\"type\":\"bool\"}],\"name\":\"baz\",\"outputs\":[{\"name\":\"r\",\"type\":\"bool\"}],\"payable\":false,\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"constant\":false,\"inputs\":[{\"name\":\"a\",\"type\":\"bytes3[2]\"}],\"name\":\"bar\",\"outputs\":[],\"payable\":false,\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":false,\"name\":\"a\",\"type\":\"bytes3[2]\"}],\"name\":\"Bar\",\"type\":\"event\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":false,\"name\":\"x\",\"type\":\"uint32\"},{\"indexed\":false,\"name\":\"y\",\"type\":\"bool\"},{\"indexed\":false,\"name\":\"r\",\"type\":\"bool\"}],\"name\":\"Baz\",\"type\":\"event\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":false,\"name\":\"a\",\"type\":\"bytes\"},{\"indexed\":false,\"name\":\"b\",\"type\":\"bool\"},{\"indexed\":false,\"name\":\"c\",\"type\":\"uint256[]\"}],\"name\":\"Sam\",\"type\":\"event\"}]";

        $this->scAuction = new \EthereumRawTx\SmartContract($smartContractAuctionBinaries, $smartContractAuctionAbi);
        $this->scFoo = new \EthereumRawTx\SmartContract($smartContractFooBinaries, $smartContractFooAbi);

        $this->chainId = \BitWasp\Buffertools\Buffer::int(4); // rinkeby

        $this->privateKey = BitWasp\Buffertools\Buffer::hex('0000000000000000000000000000000000000000000000000000000000000001');


    });

    it("Deploy", function () {

        $time = 1511775500; // timestamp

        $tx = new \EthereumRawTx\Transaction(
            null,
            null,
            $this->scAuction->getConstructBin([\BitWasp\Buffertools\Buffer::int(5), \BitWasp\Buffertools\Buffer::int($time), \BitWasp\Buffertools\Buffer::int($time + 86400)]),
            BitWasp\Buffertools\Buffer::int('0'),
            \BitWasp\Buffertools\Buffer::int(40000000000),
            \BitWasp\Buffertools\Buffer::int(1000000)
        );

        $raw = $tx->getRaw(BitWasp\Buffertools\Buffer::hex('0000000000000000000000000000000000000000000000000000000000000001'), $this->chainId);

        expect($raw->getHex())->to->equal('f90c97808509502f9000830f42408080b90c446060604052341561000f57600080fd5b604051606080610be483398101604052808051906020019091908051906020019091908051906020019091905050826002819055508160018190555080600081905550806004819055506000600360006101000a81548160ff0219169083151502179055507f0114aab713235b737f82de882833e128d244e12c1b0967b9c49748c123a6f4b183838360405180848152602001838152602001828152602001935050505060405180910390a1505050610b17806100cd6000396000f3006060604052600436106100e6576000357c0100000000000000000000000000000000000000000000000000000000900463ffffffff1680630b97bc86146100eb5780630f76787214610114578063164418131461013d5780632014e5d1146101745780634423c5f1146101a1578063454a2ab31461021d5780634c051f1414610258578063544736e6146102ad5780636f52a711146102da5780637b3529621461030357806382dd9b7714610330578063971c92a814610360578063bef4876b14610389578063c24a0f8b146103b6578063e53dbd7a146103df578063efbe1c1c14610408575b600080fd5b34156100f657600080fd5b6100fe610435565b6040518082815260200191505060405180910390f35b341561011f57600080fd5b61012761043b565b6040518082815260200191505060405180910390f35b341561014857600080fd5b610150610441565b60405180848152602001838152602001828152602001935050505060405180910390f35b341561017f57600080fd5b61018761045a565b604051808215151515815260200191505060405180910390f35b34156101ac57600080fd5b6101c2600480803590602001909190505061047a565b604051808573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020018481526020018381526020018215151515815260200194505050505060405180910390f35b341561022857600080fd5b61023e60048080359060200190919050506104e6565b604051808215151515815260200191505060405180910390f35b341561026357600080fd5b61026b6107e6565b604051808273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200191505060405180910390f35b34156102b857600080fd5b6102c0610890565b604051808215151515815260200191505060405180910390f35b34156102e557600080fd5b6102ed61089d565b6040518082815260200191505060405180910390f35b341561030e57600080fd5b6103166108a3565b604051808215151515815260200191505060405180910390f35b341561033b57600080fd5b6103436108c6565b604051808381526020018281526020019250505060405180910390f35b341561036b57600080fd5b61037361095e565b6040518082815260200191505060405180910390f35b341561039457600080fd5b61039c610963565b604051808215151515815260200191505060405180910390f35b34156103c157600080fd5b6103c9610976565b6040518082815260200191505060405180910390f35b34156103ea57600080fd5b6103f261097c565b6040518082815260200191505060405180910390f35b341561041357600080fd5b61041b610981565b604051808215151515815260200191505060405180910390f35b60015481565b60025481565b6000806000600154925060005491506004549050909192565b6000610464610890565b801561047557506104736108a3565b155b905090565b60058181548110151561048957fe5b90600052602060002090600402016000915090508060000160009054906101000a900473ffffffffffffffffffffffffffffffffffffffff16908060010154908060020154908060030160009054906101000a900460ff16905084565b6000806104f16108c6565b9150506104fc61045a565b151561050b57600091506107e0565b8083101561063557600580548060010182816105279190610a4f565b916000526020600020906004020160006080604051908101604052803273ffffffffffffffffffffffffffffffffffffffff16815260200187815260200142815260200160001515815250909190915060008201518160000160006101000a81548173ffffffffffffffffffffffffffffffffffffffff021916908373ffffffffffffffffffffffffffffffffffffffff160217905550602082015181600101556040820151816002015560608201518160030160006101000a81548160ff0219169083151502179055505050507f3f3880a3434edc55799b6fa2eb84de9f6b4364947a45ded791bac94deae3c0a1836040518082815260200191505060405180910390a1600091506107e0565b600580548060010182816106499190610a4f565b916000526020600020906004020160006080604051908101604052803273ffffffffffffffffffffffffffffffffffffffff16815260200187815260200142815260200160011515815250909190915060008201518160000160006101000a81548173ffffffffffffffffffffffffffffffffffffffff021916908373ffffffffffffffffffffffffffffffffffffffff160217905550602082015181600101556040820151816002015560608201518160030160006101000a81548160ff0219169083151502179055505050507fd04f845137f741f1b1fcb8758a097aa384274dde474ea57dc4b71e88f8625cf3838232604051808481526020018381526020018273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001935050505060405180910390a160b4600054034211156107db5760b442016000819055507fe95bc45419aec7c2c587ae26906bc5d0cd55ce4237d73476f63bc13b36b149556000546040518082815260200191505060405180910390a15b600191505b50919050565b60008060058054905090505b60008114151561088b5760056001820381548110151561080e57fe5b906000526020600020906004020160030160009054906101000a900460ff161561087d5760056001820381548110151561084457fe5b906000526020600020906004020160000160009054906101000a900473ffffffffffffffffffffffffffffffffffffffff16915061088c565b8080600190039150506107f2565b5b5090565b6000600154421015905090565b60045481565b6000600360009054906101000a900460ff16806108c1575060005442115b905090565b600080600060058054905090505b600081141515610953576005600182038154811015156108f057fe5b906000526020600020906004020160030160009054906101000a900460ff16156109455760056001820381548110151561092657fe5b9060005260206000209060040201600101549250600183019150610959565b8080600190039150506108d4565b60025491505b509091565b60b481565b600360009054906101000a900460ff1681565b60005481565b60b481565b600080600360009054906101000a900460ff16806109a0575060005442105b156109ae5760009150610a4b565b6001600360006101000a81548160ff0219169083151502179055506109d16108c6565b5090507f8b1ad6c69d3d79a05f5b1ec0de825e9bf67c6c70b8c25babd159976cf9990dff6109fd6107e6565b82604051808373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020018281526020019250505060405180910390a1600191505b5090565b815481835581811511610a7c57600402816004028360005260206000209182019101610a7b9190610a81565b5b505050565b610ae891905b80821115610ae457600080820160006101000a81549073ffffffffffffffffffffffffffffffffffffffff0219169055600182016000905560028201600090556003820160006101000a81549060ff021916905550600401610a87565b5090565b905600a165627a7a72305820754c1010acd9d786231fb46d9cddd36ece3750a041ba8f62c211cccbe25c2c2000290000000000000000000000000000000000000000000000000000000000000005000000000000000000000000000000000000000000000000000000005a1bdd0c000000000000000000000000000000000000000000000000000000005a1d2e8c2ca04a7aa5dbe4b9de6425985e9ff4d6bce59774d6f27c253127d943edb7ed9e3360a021519ac7fdc6c6c3f901af32308f69736bd2c841aa37d73e79b2e39180d9096b');

    });

    it("Decode response", function () {

        $responseRaw = "0x000000000000000000000000000000000000000000000000000000005a16e154000000000000000000000000000000000000000000000000000000005a1832d4000000000000000000000000000000000000000000000000000000005a1832d4";
        $reponseData = $this->scAuction->decodeMethodResponse("getDates", $responseRaw);

        expect($reponseData['_startDate']->getInt())->to->equal('1511448916');
        expect($reponseData['_endDate']->getInt())->to->equal('1511535316');
        expect($reponseData['_originalEndDate']->getInt())->to->equal('1511535316');

        $responseRaw = "0x000000000000000000000000e9875966d7d6490592db866f815faf6fa94225a6";
        $reponseData = $this->scAuction->decodeMethodResponse("getLeader", $responseRaw);

        expect($reponseData['_leader']->getHex())->to->equal('e9875966d7d6490592db866f815faf6fa94225a6');

        $responseRaw = "0x00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000005";
        $reponseData = $this->scAuction->decodeMethodResponse("getCurrentAmounts", $responseRaw);

        expect($reponseData['_current']->getInt())->to->equal('0');
        expect($reponseData['_minimal']->getInt())->to->equal('5');

    });

    it("Decode response event", function () {

        $responseRaw = json_decode('{"address":"0x31b83a851eb7112448d4837a071acabd83531f69","topics":["0xd04f845137f741f1b1fcb8758a097aa384274dde474ea57dc4b71e88f8625cf3"],"data":"0x000000000000000000000000000000000000000000000000000000000000002a0000000000000000000000000000000000000000000000000000000000000026000000000000000000000000e78102df96419cd9c44d6bd8f14ea87712a3b479","blockNumber":"0x5577e","transactionHash":"0x1654c3343501d4cdb78ddd52da8e86c5f700ed13a8cdf71e7b6544b7483c8559","transactionIndex":"0x0","blockHash":"0x0b675c0fab32f0ab0221c309145b7b27571f335aa49518c05d71b4d8d1771a80","logIndex":"0x0","removed":false}',true);
        $reponseData = $this->scAuction->decodeEventResponse($responseRaw);

        expect($reponseData['eventName'])->to->equal('BidAccepted');
        expect($reponseData['data']['amount']->getInt())->to->equal('42');
        expect($reponseData['data']['_minimal']->getInt())->to->equal('38');
        expect($reponseData['data']['origin']->getHex())->to->equal('e78102df96419cd9c44d6bd8f14ea87712a3b479');

    });

    it("encode dynamic data", function () {

        $reponseData = $this->scFoo->getMethodBin('bar',[["abc", "def"]]);
        expect($reponseData->getHex())->to->equal('fce353f661626300000000000000000000000000000000000000000000000000000000006465660000000000000000000000000000000000000000000000000000000000');

        $reponseData = $this->scFoo->getMethodBin('sam',["Je suis une chaîne de mots !", BitWasp\Buffertools\Buffer::int(1), [BitWasp\Buffertools\Buffer::int(1),BitWasp\Buffertools\Buffer::int(2),BitWasp\Buffertools\Buffer::int(3)]]);
        expect($reponseData->getHex())->to->equal('a5643bf20000000000000000000000000000000000000000000000000000000000000060000000000000000000000000000000000000000000000000000000000000000100000000000000000000000000000000000000000000000000000000000000a0000000000000000000000000000000000000000000000000000000000000001d4a65207375697320756e6520636861c3ae6e65206465206d6f747320210000000000000000000000000000000000000000000000000000000000000000000003000000000000000000000000000000000000000000000000000000000000000100000000000000000000000000000000000000000000000000000000000000020000000000000000000000000000000000000000000000000000000000000003');

    });

    it("decode dynamic data", function () {

        $responseRaw = json_decode('{"address":"0x31b83a851eb7112448d4837a071acabd83531f69","topics":["0xa1d06154b558126189069ad83a9101e6312f338ca9d22ca6c4f4ef9d7701a7ed"],"data":"0x61626300000000000000000000000000000000000000000000000000000000006465660000000000000000000000000000000000000000000000000000000000","blockNumber":"0x5577e","transactionHash":"0x1654c3343501d4cdb78ddd52da8e86c5f700ed13a8cdf71e7b6544b7483c8559","transactionIndex":"0x0","blockHash":"0x0b675c0fab32f0ab0221c309145b7b27571f335aa49518c05d71b4d8d1771a80","logIndex":"0x0","removed":false}',true);
        $reponseData = $this->scFoo->decodeEventResponse($responseRaw);

        expect($reponseData['eventName'])->to->equal('Bar');
        expect($reponseData['data']['a'][0]->getHex())->to->equal('616263');
        expect($this->scFoo->stringDecode($reponseData['data']['a'][0]->getHex()))->to->equal('abc');
        expect($reponseData['data']['a'][1]->getHex())->to->equal('646566');
        expect($this->scFoo->stringDecode($reponseData['data']['a'][1]->getHex()))->to->equal('def');


        $responseRaw = json_decode('{"address":"0x31b83a851eb7112448d4837a071acabd83531f69","topics":["0x1426d52d0c36f9161332481a43d185f7641e1a03afe835bd26825fea76cb3510"],"data":"0x0000000000000000000000000000000000000000000000000000000000000060000000000000000000000000000000000000000000000000000000000000000100000000000000000000000000000000000000000000000000000000000000a0000000000000000000000000000000000000000000000000000000000000001d4a65207375697320756e6520636861c3ae6e65206465206d6f747320210000000000000000000000000000000000000000000000000000000000000000000003000000000000000000000000000000000000000000000000000000000000000100000000000000000000000000000000000000000000000000000000000000020000000000000000000000000000000000000000000000000000000000000003","blockNumber":"0x5577e","transactionHash":"0x1654c3343501d4cdb78ddd52da8e86c5f700ed13a8cdf71e7b6544b7483c8559","transactionIndex":"0x0","blockHash":"0x0b675c0fab32f0ab0221c309145b7b27571f335aa49518c05d71b4d8d1771a80","logIndex":"0x0","removed":false}',true);
        $reponseData = $this->scFoo->decodeEventResponse($responseRaw);

        expect($reponseData['eventName'])->to->equal('Sam');
        expect($reponseData['data']['a']->getHex())->to->equal('4a65207375697320756e6520636861c3ae6e65206465206d6f74732021');
        expect($this->scFoo->stringDecode($reponseData['data']['a']->getHex()))->to->equal('Je suis une chaîne de mots !');
        expect($reponseData['data']['b'])->to->equal(true);
        expect($reponseData['data']['c'][0]->getInt())->to->equal('1');
        expect($reponseData['data']['c'][1]->getInt())->to->equal('2');
        expect($reponseData['data']['c'][2]->getInt())->to->equal('3');

    });

});
