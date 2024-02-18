import React from "react";
import ReactDom from "react-dom/client";
import { ChainId, ThirdwebProvider } from "@thirdweb-dev/react";
import { Sepolia } from "@thirdweb-dev/chains";

import App from "./App";
import { StateContextProvider } from "./context";
const root = ReactDom.createRoot(document.getElementById("root"));

root.render(
  <ThirdwebProvider
    desiredChainId={11155111}
    activeChain={Sepolia}
    clientId="cfd2fa9fbdaf82d42fcca9b064a19e9d"
  >
      <StateContextProvider>
        <App />
      </StateContextProvider>
  </ThirdwebProvider>
);