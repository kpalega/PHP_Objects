{extends file = $conf->root_path|cat:"/templates/main.tpl"}

{block name=content} 
    <h2>Kalkulator BMI</h2> <br/>
    <div>
    <form action="{$conf->action_root}calcCompute" method="post" >
        <fieldset>
        <div class="row gtr-uniform">
            <p>Podaj </p>
            <div class=" col-2 ">
		<input type="text" name="height" id="height" value="{$form->height}" placeholder="Wzrost" />
            </div>
            
            <div class=" col-3">
		<select name="meter" id="meter">
                    
                        {if isset($result->op)}
                            <option selected value="{$form->meter}">{$result->op}</option>
                            <option value="" disabled="true">---</option>
                        {/if}
                    
                	<option value="cm">w centymetrach</option>
			<option value="m">w metrach</option>
		</select>
            </div>
        </div>
        
        <div class="row">
            <p>Podaj</p> 
            <div class="col-2">
		<input type="text" name="weight" id="weight" value="{$form->weight}" placeholder="Wagę" />
            </div>
            <p> &emsp; w kilogramach </p>
        </div>
        <br/>
        <div class="col-12">
		<ul class="actions">
		<li><input type="submit" value="Oblicz" class="primary" /></li>
		<li><input type="reset" value="Reset" /></li>
		</ul>
        </div>
        </fieldset>
    </form>
<hr/>
<div class="row ">
    <section class='col-6'>
        {if $msgs->isError()}
            <h4> Wystąpiły błędy: </h4>
            <o1>
                {foreach $msgs->getErrors() as $err}
                    {strip}
                        <li>{$err}</li>
                    {/strip}
                {/foreach}
            </o1>
            <br/>
        {/if}
    
	{if $msgs->isInfo()}
		<h4>Informacje: </h4>
		<ol>
		{foreach  $msgs->getInfo() as $inf}
		{strip}
			<li>{$inf}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
    </section>
<section class='col-6'>
{if isset($result->result)}
	<h4>Wynik: </h4>
	<p>{round($result->result,3)} &emsp; &larr; &emsp;więc 
            {if $result->result<18.5} posiadasz niedowagę </p>{/if}
            {if $result->result>=18.5 && $result->result<25} Twoja waga jest w normie </p>{/if}
            {if $result->result>=25} posiadasz nadwagę </p>{/if}
{/if}

</section>

{if isset($result->result)}
    <center>
        <img src="{$conf->app_root}/images/image1.jpg" alt="Tabela BMI" style="width:900px;height:500px;">
    </center>
{/if}
</div>
</div>

{/block}