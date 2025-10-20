<div style="font-family: 'Fira Code', monospace; color: #333; padding: 20px; background: linear-gradient(135deg, #f7f7f7, #ececec); border: 1px solid #ddd; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <h1 style="color: #2c3e50; font-size: 24px; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);">Fruit Component</h1>
    <p style="font-size: 16px; line-height: 1.5;">This is the Fruit component.</p>

    <ul style="list-style-type: disc; padding-left: 20px;">
        <span>{{ $title }}</span>
        @foreach ($fruits as $fruit)
            <li style="margin-bottom: 8px; color: {{ $loop->index % 2 == 0 ? '#e74c3c' : '#3498db' }};">{{ $fruit }}</li>
        @endforeach
    </ul>
</div>

