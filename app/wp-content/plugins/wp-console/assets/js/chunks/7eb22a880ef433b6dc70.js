"use strict";(self.wpConsoleWebpack=self.wpConsoleWebpack||[]).push([[5],{5:function(e,n,t){t.r(n);var l=t(307),o=t(609),s=t(736),c=t(847),a=t(654),r=t(543);n.default=(0,c.Z)({select:["fetchingLog","clearingLog","log","extraInfo"],dispatch:["setNotice","startFetchingLog","finishFetchingLog","setLog","setExtraInfo"]})((e=>{const{fetchingLog:n,clearingLog:t,log:c,extraInfo:p}=e;return(0,l.useEffect)((()=>{(0,a.Z)(e)}),[]),(0,l.createElement)("div",{id:"wp-console-panel-debug-log"},n||t?(0,l.createElement)("div",{className:"wp-console-spinner"},(0,l.createElement)(o.Spinner,null),n?(0,s.sprintf)(// translators: %s: Fetching debug.log indicator
(0,s.__)("Fetching %s","wp-console"),"debug.log"):(0,s.sprintf)(// translators: %s: Clearing debug.log indicator
(0,s.__)("Clearing %s","wp-console"),"debug.log"),"..."):(0,l.createElement)(l.Fragment,null,c?(0,l.createElement)(l.Fragment,null,"API_ERROR"===c?(0,l.createElement)("pre",null):(0,l.createElement)("pre",null,c)):(0,l.createElement)("p",{className:"empty-content"},(0,l.createElement)("span",null,(0,l.createElement)(r.ey,{width:"29",height:"29"})," ",(0,s.__)("Your debug.log is empty","wp-console")))),p.php_version&&(0,l.createElement)("div",{className:"extra-info"},(0,s.__)("CURRENT TIME","wp-console"),":"," ",p.current_time," ",p.timezone,(0,l.createElement)("span",{className:"wp-console-separator"}),(0,s.__)("PHP VERSION","wp-console"),":"," ",p.php_version))}))}}]);