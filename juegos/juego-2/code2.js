gdjs.Game_32OverCode = {};
gdjs.Game_32OverCode.GDNewTextObjects1= [];
gdjs.Game_32OverCode.GDNewTextObjects2= [];
gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorderObjects1= [];
gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorderObjects2= [];
gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorder2Objects1= [];
gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorder2Objects2= [];
gdjs.Game_32OverCode.GDTransitionObjects1= [];
gdjs.Game_32OverCode.GDTransitionObjects2= [];
gdjs.Game_32OverCode.GDDarkenObjects1= [];
gdjs.Game_32OverCode.GDDarkenObjects2= [];
gdjs.Game_32OverCode.GDFloorObjects1= [];
gdjs.Game_32OverCode.GDFloorObjects2= [];
gdjs.Game_32OverCode.GDSpiderEnemyObjects1= [];
gdjs.Game_32OverCode.GDSpiderEnemyObjects2= [];
gdjs.Game_32OverCode.GDPlayerObjects1= [];
gdjs.Game_32OverCode.GDPlayerObjects2= [];


gdjs.Game_32OverCode.userFunc0x122f548 = function GDJSInlineCode(runtimeScene) {
"use strict";
var variables = runtimeScene.getVariables();
var score = variables.get("puntaje").getAsString();

window.parent.postMessage({score}, '*');
console.log(score)
};
gdjs.Game_32OverCode.eventsList0 = function(runtimeScene) {

{


gdjs.Game_32OverCode.userFunc0x122f548(runtimeScene);

}


};gdjs.Game_32OverCode.eventsList1 = function(runtimeScene) {

{

gdjs.copyArray(runtimeScene.getObjects("TransparentButtonWithWhiteBlueBorder"), gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorderObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorderObjects1.length;i<l;++i) {
    if ( gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorderObjects1[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorderObjects1[k] = gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorderObjects1[i];
        ++k;
    }
}
gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorderObjects1.length = k;
if (isConditionTrue_0) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "MainMenu", false);
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("TransparentButtonWithWhiteBlueBorder2"), gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorder2Objects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorder2Objects1.length;i<l;++i) {
    if ( gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorder2Objects1[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorder2Objects1[k] = gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorder2Objects1[i];
        ++k;
    }
}
gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorder2Objects1.length = k;
if (isConditionTrue_0) {
{runtimeScene.getScene().getVariables().getFromIndex(0).setNumber(gdjs.evtTools.variable.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(1)));
}
{ //Subevents
gdjs.Game_32OverCode.eventsList0(runtimeScene);} //End of subevents
}

}


};

gdjs.Game_32OverCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.Game_32OverCode.GDNewTextObjects1.length = 0;
gdjs.Game_32OverCode.GDNewTextObjects2.length = 0;
gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorderObjects1.length = 0;
gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorderObjects2.length = 0;
gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorder2Objects1.length = 0;
gdjs.Game_32OverCode.GDTransparentButtonWithWhiteBlueBorder2Objects2.length = 0;
gdjs.Game_32OverCode.GDTransitionObjects1.length = 0;
gdjs.Game_32OverCode.GDTransitionObjects2.length = 0;
gdjs.Game_32OverCode.GDDarkenObjects1.length = 0;
gdjs.Game_32OverCode.GDDarkenObjects2.length = 0;
gdjs.Game_32OverCode.GDFloorObjects1.length = 0;
gdjs.Game_32OverCode.GDFloorObjects2.length = 0;
gdjs.Game_32OverCode.GDSpiderEnemyObjects1.length = 0;
gdjs.Game_32OverCode.GDSpiderEnemyObjects2.length = 0;
gdjs.Game_32OverCode.GDPlayerObjects1.length = 0;
gdjs.Game_32OverCode.GDPlayerObjects2.length = 0;

gdjs.Game_32OverCode.eventsList1(runtimeScene);

return;

}

gdjs['Game_32OverCode'] = gdjs.Game_32OverCode;
