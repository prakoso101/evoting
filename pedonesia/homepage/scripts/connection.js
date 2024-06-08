// Initialize web3
window.addEventListener("load", async () => {
    if (typeof window.ethereum !== "undefined") {
        // MetaMask is available
        const web3 = new Web3(window.ethereum);
        try {
            // Request access to user's MetaMask accounts
            await window.ethereum.enable();

            // Contract address and ABI
            const contractAddress = "0xE0962A267B63d325B8b54FEA580FB009255D60F1";
            const contractABI = [
                {
                    inputs: [
                        {
                            internalType: "uint256",
                            name: "",
                            type: "uint256"
                        }
                    ],
                    name: "ijazahs",
                    outputs: [
                        {
                            internalType: "uint256",
                            name: "id",
                            type: "uint256"
                        },
                        {
                            internalType: "string",
                            name: "nama",
                            type: "string"
                        },
                        {
                            internalType: "string",
                            name: "ipk",
                            type: "string"
                        },
                        {
                            internalType: "string",
                            name: "universitas",
                            type: "string"
                        },
                        {
                            internalType: "bytes32",
                            name: "uniqueHash",
                            type: "bytes32"
                        }
                    ],
                    stateMutability: "view",
                    type: "function"
                },
                {
                    inputs: [],
                    name: "nextIjazahId",
                    outputs: [
                        {
                            internalType: "uint256",
                            name: "",
                            type: "uint256"
                        }
                    ],
                    stateMutability: "view",
                    type: "function"
                },
                {
                    inputs: [
                        {
                            internalType: "string",
                            name: "_nama",
                            type: "string"
                        },
                        {
                            internalType: "string",
                            name: "_ipk",
                            type: "string"
                        },
                        {
                            internalType: "string",
                            name: "_universitas",
                            type: "string"
                        }
                    ],
                    name: "createIjazah",
                    outputs: [],
                    stateMutability: "nonpayable",
                    type: "function"
                },
                {
                    inputs: [],
                    name: "getAllIjazahs",
                    outputs: [
                        {
                            components: [
                                {
                                    internalType: "uint256",
                                    name: "id",
                                    type: "uint256"
                                },
                                {
                                    internalType: "string",
                                    name: "nama",
                                    type: "string"
                                },
                                {
                                    internalType: "string",
                                    name: "ipk",
                                    type: "string"
                                },
                                {
                                    internalType: "string",
                                    name: "universitas",
                                    type: "string"
                                },
                                {
                                    internalType: "bytes32",
                                    name: "uniqueHash",
                                    type: "bytes32"
                                }
                            ],
                            internalType: "struct StorageIjazah.IjazahData[]",
                            name: "",
                            type: "tuple[]"
                        }
                    ],
                    stateMutability: "view",
                    type: "function"
                },
                {
                    inputs: [
                        {
                            internalType: "uint256",
                            name: "_id",
                            type: "uint256"
                        },
                        {
                            internalType: "bytes32",
                            name: "_uniqueHash",
                            type: "bytes32"
                        }
                    ],
                    name: "getIjazahByIdAnduniqueHash",
                    outputs: [
                        {
                            internalType: "string",
                            name: "",
                            type: "string"
                        },
                        {
                            internalType: "string",
                            name: "",
                            type: "string"
                        },
                        {
                            internalType: "string",
                            name: "",
                            type: "string"
                        }
                    ],
                    stateMutability: "view",
                    type: "function"
                },
                {
                    inputs: [
                        {
                            internalType: "uint256",
                            name: "_id",
                            type: "uint256"
                        },
                        {
                            internalType: "bytes32",
                            name: "_uniqueHash",
                            type: "bytes32"
                        }
                    ],
                    name: "updateuniqueHash",
                    outputs: [],
                    stateMutability: "nonpayable",
                    type: "function"
                },
                {
                    inputs: [
                        {
                            internalType: "uint256",
                            name: "_id",
                            type: "uint256"
                        },
                        {
                            internalType: "string",
                            name: "_nama",
                            type: "string"
                        }
                    ],
                    name: "updateNama",
                    outputs: [],
                    stateMutability: "nonpayable",
                    type: "function"
                },
                {
                    inputs: [
                        {
                            internalType: "uint256",
                            name: "_id",
                            type: "uint256"
                        },
                        {
                            internalType: "string",
                            name: "_nama",
                            type: "string"
                        },
                        {
                            internalType: "string",
                            name: "_ipk",
                            type: "string"
                        },
                        {
                            internalType: "string",
                            name: "_universitas",
                            type: "string"
                        },
                        {
                            internalType: "bytes32",
                            name: "_uniqueHash",
                            type: "bytes32"
                        }
                    ],
                    name: "updateData",
                    outputs: [],
                    stateMutability: "nonpayable",
                    type: "function"
                },
                {
                    inputs: [
                        {
                            internalType: "uint256",
                            name: "_id",
                            type: "uint256"
                        }
                    ],
                    name: "deleteIjazah",
                    outputs: [],
                    stateMutability: "nonpayable",
                    type: "function"
                }
            ];

            // You can now interact with the contract
            const contract = new web3.eth.Contract(contractABI, contractAddress);
            // Add your contract interaction code here

        } catch (error) {
            console.error("User denied account access or error occurred", error);
        }
    } else {
        console.log("MetaMask is not available");
    }
});
